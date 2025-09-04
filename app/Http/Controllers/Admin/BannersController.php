<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banners;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class BannersController extends Controller
{
    public function index()
    {
        return view('admin.banners.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $banners = Banners::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Banners)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $banners = $banners->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $banners = $banners->orderBy('id','desc')->paginate($numbers);

        return view('admin.banners.datatable', compact('banners'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|'. Rule::unique('banners', 'name')->ignore($request->id)->whereNull('deleted_at'),
            'main_img' => 'nullable|image|mimes:png,webp|max:2048',
            'mobile_img' => 'nullable|image|mimes:png,webp|max:2048',
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
            $input['slug'] = Str::slug($request->name, '-');


            $item = Banners::updateOrCreate(['id' => $input['id']],$input);

            if($request->hasFile('main_img')) {
                // Delete old main image if exists
                if ($item->getFirstMedia('main_img')) {
                    $item->getFirstMedia('main_img')->delete();
                }
                $item->addMedia($request->file('main_img'))->toMediaCollection('main_img');
                // Reload the item to get the latest media
            }

            if($request->hasFile('mobile_img')) {
                // Delete old mobile image if exists
                if ($item->getFirstMedia('mobile_img')) {
                    $item->getFirstMedia('mobile_img')->delete();
                }
                $item->addMedia($request->file('mobile_img'))->toMediaCollection('mobile_img');
                // Reload the item to get the latest media
            }
            
            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.banners.datatable_tr', compact('item'))->render(),
                'message' => 'Banner Saved Successfully'
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
        $banner = Banners::find($request->id);
        return view('admin.banners.ajax_edit', compact('banner'));
    }

    public function delete($id)
    {
        $banner = Banners::find($id)->delete();

        return ['message' => ' Banner Deleted Successfully'];
    }

    public function status($id)
    {
        $banner = Banners::find($id);
        if($banner->status == 1){
            $banner->status = 0;
        }else{
            $banner->status = 1;
        }
        $banner->save();

        return $banner->status;
    }
}
