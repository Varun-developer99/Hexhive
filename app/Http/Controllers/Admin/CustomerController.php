<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $customers = Customer::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Customer)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $customers = $customers->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        $customers = $customers->orderBy('id','desc')->paginate($numbers);

        return view('admin.customer.datatable', compact('customers'));
    }

    
    public function delete($id)
    {
        $customer = Customer::find($id)->delete();

        return ['message' => ' Customer Deleted Successfully'];
    }

    public function status($id)
    {
        $customer = Customer::find($id);
        if($customer->status == 1){
            $customer->status = 0;
        }else{
            $customer->status = 1;
        }
        $customer->save();

        return $customer->status;
    }
}
