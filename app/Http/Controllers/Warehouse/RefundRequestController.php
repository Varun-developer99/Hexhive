<?php

namespace App\Http\Controllers\Warehouse;

use App\Models\Brand;
use App\Models\Refund;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class RefundRequestController extends Controller
{
    public function index()
    {
        return view('admin.refunded_order.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $brand = Brand::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Brand)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $brand = $brand->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $brand = $brand->orderBy('id','desc')->paginate($numbers);

        return view('admin.brand.datatable', compact('brand'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|' . Rule::unique('brands', 'name')->ignore($request->id)->whereNull('deleted_at'),
            'main_img' => 'nullable|image|mimes:png,webp|max:2048',
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
            $input['status'] = $request->status ?? 0;
            $input['is_featured'] = $request->is_featured ?? 0;
            $input['slug'] = Str::slug($request->name, '-');
            
            $item = Brand::updateOrCreate(['id' => $input['id']], $input);

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
                'html' => view('admin.brand.datatable_tr', compact('item'))->render(),
                'message' => 'Brand Saved Successfully'
            ], 200);

        } catch (\Exception $e) {
            // Step 5: Handle unexpected errors
            return response()->json([
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function status($id)
    {
        $brand = Brand::find($id);
        if($brand->status == 1){
            $brand->status = 0;
        }else{
            $brand->status = 1;
        }
        $brand->save();

        return $brand->status;
    }
}
