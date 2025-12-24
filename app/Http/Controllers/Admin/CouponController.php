<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CouponController extends Controller
{
    public function index()
    {
        return view('admin.coupon.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $coupon = Coupon::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Coupon)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $coupon = $coupon->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

       

        $coupon = $coupon->orderBy('id','desc')->paginate($numbers);

        return view('admin.coupon.datatable', compact('coupon'));
    }

    public function insert(Request $request)
    {
        $input = $request->all();

        $input['created_by_id'] = Auth::user()->id;
        $input['status'] = $request->status ?? 0;
        $input['product_ids'] = json_encode($request->product_ids ?? []);

        $coupon = Coupon::updateOrCreate(['id' => $input['id']],$input);

        $item = $coupon;
        $response['id'] = $item['id'];
        $response['html'] = view('admin.coupon.datatable_tr', compact('item'))->render();
        $response['message'] = 'Coupon Saved Successfully';
        
        return $response;
    }

    public function edit(Request $request)
    {
        $coupon = Coupon::find($request->id);
        return view('admin.coupon.ajax_edit', compact('coupon'));
    }

    public function delete($id)
    {
        $coupon = Coupon::find($id)->delete();

        return ['message' => 'Coupon Deleted Successfully'];
    }
}
