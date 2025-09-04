<?php

namespace App\Http\Controllers\Warehouse;

use Illuminate\Support\Str;
use App\Models\StockDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class StockDetailsController extends Controller
{
    public function index()
    {
        return view('admin.stock_details.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        if(Auth::user()->role_as == 'Admin'){
            $stock_details = StockDetails::where('deleted_at', null);
            // if($request->warehouse_filter){
            //     $stock_details = $stock_details->where('warehouse_id', $request->warehouse_filter);
            // }
        }else{
            $stock_details = StockDetails::where('warehouse_id', Auth::user()->id)->where('deleted_at', null);
        }
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new StockDetails)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $stock_details = $stock_details->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        if($request->in_out_filter){
            $stock_details = $stock_details->where('in_out', $request->in_out_filter);
        }
        if($request->product_filter){
            $stock_details = $stock_details->where('product_id', $request->product_filter);
        }
        if($request->brand_filter){
            $stock_details = $stock_details->where('brand_id', $request->brand_filter);
        }
        if($request->category_filter){
            $stock_details = $stock_details->where('category_id', $request->category_filter);
        }

        $stock_details = $stock_details->orderBy('created_at','desc')->paginate($numbers);

        return view('admin.stock_details.datatable', compact('stock_details'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|string|max:255',
            'in_out' => 'required|string|max:255',
            'qty' => 'required|string|max:255',
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
            $product = Product::find($input['product_id']);
            $input['brand_id'] = $product->brand_id;
            $input['category_id'] = $product->category_id;
            $input['sub_category_id'] = $product->sub_category_id;
            //$input['warehouse_id'] = $request->warehouse_id ?? Auth::user()->id;

            $item = StockDetails::updateOrCreate(['id' => $input['id']],$input);

            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.stock_details.datatable_tr', compact('item'))->render(),
                'message' => 'StockDetails Saved Successfully'
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
        $stock_details = StockDetails::find($request->id);
        return view('admin.stock_details.ajax_edit', compact('stock_details'));
    }

    public function delete($id)
    {
        $stock_details = StockDetails::find($id)->delete();

        return ['message' => ' StockDetails Deleted Successfully'];
    }

    public function status($id)
    {
        $stock_details = StockDetails::find($id);
        if($stock_details->status == 1){
            $stock_details->status = 0;
        }else{
            $stock_details->status = 1;
        }
        $stock_details->save();

        return $stock_details->status;
    }
}
