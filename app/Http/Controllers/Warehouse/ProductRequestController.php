<?php

namespace App\Http\Controllers\Warehouse;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductRequestController extends Controller
{
     public function index()
    {
        return view('admin.product_request.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        if(Auth::user()->role_as == 'Admin'){
            $product_request = ProductRequest::where('deleted_at', null);
        }else{
            $product_request = ProductRequest::where('warehouse_id', Auth::user()->id)->where('deleted_at', null);
        }
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ProductRequest)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $product_request = $product_request->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        if($request->warehouse_filter){
            $product_request = $product_request->where('warehouse_id', $request->warehouse_filter);
        }
        if($request->brand_filter){
            $product_request = $product_request->where('brand_id', $request->brand_filter);
        }
        if($request->category_filter){
            $product_request = $product_request->where('category_id', $request->category_filter);
        }
        if($request->sub_category_filter){
            $product_request = $product_request->where('sub_category_id', $request->sub_category_filter);
        }
        if($request->status){
            $product_request = $product_request->where('status', $request->status);
        }

        $product_request = $product_request->orderBy('id','desc')->paginate($numbers);

        return view('admin.product_request.datatable', compact('product_request'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|'.Rule::unique('product_requests', 'name')->ignore($request->id)->whereNull('deleted_at').'|'.Rule::unique('products', 'name')->ignore($request->product_id)->whereNull('deleted_at'),
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

            if(Auth::user()->role_as == 'Warehouse'){
                $input['created_by_id'] = Auth::user()->id;
                $input['warehouse_id'] = Auth::user()->id;
            }
            $input['status'] = $request->status ?? 'Pending';
            $input['slug'] = Str::slug($request->name, '-');

            $item = ProductRequest::updateOrCreate(['id' => $input['id']],$input);
            $item->code = 'PR-' . str_pad($item->id, 3, '0', STR_PAD_LEFT);
            $item->save();

            if($request->hasFile('main_img')) {
                // Delete old main image if exists
                if ($item->getFirstMedia('main_img')) {
                    $item->getFirstMedia('main_img')->delete();
                }
                $item->addMedia($request->file('main_img'))->toMediaCollection('main_img');
                // Reload the item to get the latest media
            }
            // Handle multiple gallery images
            if ($request->hasFile('gallery_imgs')) {
                $galleryImgs = $request->file('gallery_imgs');
                if (is_array($galleryImgs)) {
                    foreach ($galleryImgs as $galleryImg) {
                        $item->addMedia($galleryImg)->toMediaCollection('gallery_imgs');
                    }
                } else {
                    $item->addMedia($galleryImgs)->toMediaCollection('gallery_imgs');
                }
            }
            
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.product_request.datatable_tr', compact('item'))->render(),
                'message' => 'ProductRequest Saved Successfully',
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
        $product_request = ProductRequest::find($request->id);
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $sub_categories = SubCategory::where('category_id', ($product_request->category_id ?? 0))->where('status', 1)->get();
        return view('admin.product_request.ajax_edit', compact('product_request', 'brands', 'categories', 'sub_categories'));
    }

    public function delete($id)
    {
        $product_request = ProductRequest::find($id)->delete();

        return ['message' => ' ProductRequest Deleted Successfully'];
    }

    public function change_status(Request $request)
    {
        $product_request = ProductRequest::find($request->id);
        return view('admin.product_request.change_status', compact('product_request', 'request'));
    }

    public function change_status_store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:255',
        ]);

        // Step 2: If validation fails, return 422 JSON response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        // try {
            // Step 3: Save or update your data
            $input = $request->all();

            $input['status'] = $request->status ?? 'Pending';

            $item = ProductRequest::updateOrCreate(['id' => $input['id']],$input);

            if($item->status == 'Approved'){
                $input = $item->toArray();
                unset($input['created_at'], $input['updated_at'], $input['deleted_at']);

                $input['id'] = $item->product_id ?? 0;
                $input['status'] = 1;
                if($deleted_product = Product::where('id', $input['id'])->withTrashed()->first()){
                    $deleted_product->restore();
                }
                $product = Product::updateOrCreate(['id' => $input['id']], $input);
                $product->code = 'P-' . str_pad($product->id, 3, '0', STR_PAD_LEFT);
                $product->save();

                // Copy main image from ProductRequest to Product
                if ($item->getFirstMedia('main_img')) {
                    if ($product->getFirstMedia('main_img')) {
                        $product->clearMediaCollection('main_img');
                        $product->clearMediaCollection('gallery_imgs');
                    }
                    $product_request_main_img = $item->getFirstMedia('main_img');
                    $product_request_main_img->copy($product, 'main_img');
                }

                // Copy gallery images from ProductRequest to Product
                foreach ($item->getMedia('gallery_imgs') as $galleryImg) {
                    $galleryImg->copy($product, 'gallery_imgs');
                }

                $item->product_id = $product->id;
                $item->save();
            }else{
                $product = Product::find($item->product_id);
                if($product){
                    $product->delete();
                }
            }
            // Step 4: Return success response with 200

            return response()->json([
                'id' => $item->id,
                'html' => view('admin.product_request.datatable_tr', compact('item'))->render(),
                'message' => 'ProductRequest Saved Successfully',
            ], 200);

        // } catch (\Exception $e) {
        //     // Step 5: Handle unexpected errors
        //     return response()->json([
        //         'message' => 'Something went wrong!',
        //         'error' => $e->getMessage()
        //     ], 500);
        // }
    }
}
