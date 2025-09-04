<?php

namespace App\Http\Controllers\Admin;

use App\Models\Policy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class PolicyController extends Controller
{
    public function index()
    {
        return view('admin.policy.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $policy = Policy::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Policy)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $policy = $policy->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        $policy = $policy->orderBy('id','desc')->paginate($numbers);

        return view('admin.policy.datatable', compact('policy'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|' . Rule::unique('policies', 'title')->ignore($request->id)->whereNull('deleted_at'),
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
            $input['slug'] = Str::slug($request->title, '-');
            
            $item = Policy::updateOrCreate(['id' => $input['id']], $input);

            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.policy.datatable_tr', compact('item'))->render(),
                'message' => 'Policy Saved Successfully'
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
        $policy = Policy::find($request->id);
        return view('admin.policy.ajax_edit', compact('policy'));
    }

    public function delete($id)
    {
        $policy = Policy::find($id)->delete();

        return ['message' => ' Policy Deleted Successfully'];
    }

    public function status($id)
    {
        $policy = Policy::find($id);
        if($policy->status == 1){
            $policy->status = 0;
        }else{
            $policy->status = 1;
        }
        $policy->save();

        return $policy->status;
    }
}
