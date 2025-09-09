<?php

namespace App\Http\Controllers\Admin;

use App\Models\Botteltypes;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class BotteltypeController extends Controller
{
    public function index()
    {
        return view('admin.botteltype.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $botteltype = Botteltypes::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Botteltypes)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $botteltype = $botteltype->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        $botteltype = $botteltype->orderBy('id','desc')->paginate($numbers);

        return view('admin.botteltype.datatable', compact('botteltype'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|'. Rule::unique('categories', 'name')->ignore($request->id)->whereNull('deleted_at'),
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

            $item = Botteltypes::updateOrCreate(['id' => $input['id']],$input);

                // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.botteltype.datatable_tr', compact('item'))->render(),
                'message' => 'Bottel Type Saved Successfully'
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
        $botteltype = Botteltypes::find($request->id);
        return view('admin.botteltype.ajax_edit', compact('botteltype'));
    }

    public function delete($id)
    {
        $botteltype = Botteltypes::find($id)->delete();

        return ['message' => ' Bottel Type Deleted Successfully'];
    }

    public function status($id)
    {
        $botteltype = Botteltypes::find($id);
        if($botteltype->status == 1){
            $botteltype->status = 0;
        }else{
            $botteltype->status = 1;
        }
        $botteltype->save();

        return $botteltype->status;
    }
}
