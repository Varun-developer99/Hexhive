<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\WarehouseStatusChangedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class WarehouseController extends Controller
{
    public function index()
    {
        return view('admin.warehouse.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $warehouse = User::where('role_as', 'Warehouse');
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new User)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $warehouse = $warehouse->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $warehouse = $warehouse->orderBy('id','desc')->paginate($numbers);

        return view('admin.warehouse.datatable', compact('warehouse'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:255|unique:users,email,' . $request->id,
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

            if($request->password){
                $input['password'] = Hash::make($request->password);
                $input['show_password'] = $request->password;
                $input['email_verified_at'] = now();
            }else{
                unset($input['password']);
            }

            $item = User::updateOrCreate(['id' => $input['id']],$input);
            $item->role_as = 'Warehouse';
            if($request->password){
                $item->password = Hash::make($request->password);
                $item->show_password = $request->password;
                $item->email_verified_at = now();
            }
            $item->save();

            if($request->hasFile('drug_license')) {
                if ($item->getFirstMedia('drug_license')) {
                    $item->getFirstMedia('drug_license')->delete();
                }
                $item->addMedia($request->file('drug_license'))->toMediaCollection('drug_license');
            }
            if($request->hasFile('gst_certificate')) {
                if ($item->getFirstMedia('gst_certificate')) {
                    $item->getFirstMedia('gst_certificate')->delete();
                }
                $item->addMedia($request->file('gst_certificate'))->toMediaCollection('gst_certificate');
            }

            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.warehouse.datatable_tr', compact('item'))->render(),
                'message' => 'User Saved Successfully'
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
        $warehouse = User::find($request->id);
        return view('admin.warehouse.ajax_edit', compact('warehouse'));
    }

    public function delete($id)
    {
        $warehouse = User::find($id)->delete();

        return ['message' => ' User Deleted Successfully'];
    }

    public function change_status(Request $request)
    {
        $warehouse = User::find($request->id);
        return view('admin.warehouse.change_status', compact('warehouse'));
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

            $input['status'] = $request->status ?? 0;

            $item = User::updateOrCreate(['id' => $input['id']],$input);

            Mail::to($item->email)->send(new WarehouseStatusChangedMail($item));

            // Step 4: Return success response with 200

            return response()->json([
                'id' => $item->id,
                'html' => view('admin.warehouse.datatable_tr', compact('item'))->render(),
                'message' => 'Warehouse Status Changed Successfully',
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
