<?php

namespace App\Http\Controllers\Admin;

use App\Models\ComboProduct;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class ComboProductsController extends Controller
{
    public function index()
    {
        // Return the view for combo products index
        $products = Product::all();
        return view('admin.combo_products.index', compact('products'));
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $comboProducts = ComboProduct::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ComboProduct)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $comboProducts = $comboProducts->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $comboProducts = $comboProducts->orderBy('id','desc')->paginate($numbers);

        return view('admin.combo_products.datatable', compact('comboProducts'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        // Step 2: If validation fails, return 422 JSON response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Step 3: Save or update your data
            $input = $request->all();

            $input['created_by_id'] = Auth::user()->id;
            $input['name'] = Str::slug($request->name, '-');
            $input['products'] = json_encode($request->products ?? []);
            $input['status'] = $request->status ?? 0;

            $item = ComboProduct::updateOrCreate(['id' => $input['id']],$input);

            if($request->hasFile('main_img')) {
                // Delete old main image if exists
                if ($item->getFirstMedia('main_img')) {
                    $item->getFirstMedia('main_img')->delete();
                }
                $item->addMedia($request->file('main_img'))->toMediaCollection('main_img');
                // Reload the item to get the latest media
            }
            
            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.combo_products.datatable_tr', compact('item'))->render(),
                'message' => 'Combo Product Saved Successfully'
            ], 200);

        } catch (\Exception $e) {
            // Step 5: Handle unexpected errors
            return response()->json([
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request)
    {
        $comboproducts = ComboProduct::find($request->id);
        $products = Product::all();
        return view('admin.combo_products.ajax_edit', compact('comboproducts', 'products'));
    }

    public function delete($id)
    {
        $comboProduct = ComboProduct::find($id)->delete();

        return ['message' => ' Combo Product Deleted Successfully'];
    }

    public function status($id)
    {
        $comboProduct = ComboProduct::find($id);
        if($comboProduct->status == 1){
            $comboProduct->status = 0;
        }else{
            $comboProduct->status = 1;
        }
        $comboProduct->save();

        return $comboProduct->status;
    }
}
