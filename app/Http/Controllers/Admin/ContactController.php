<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactForm;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $contacts = ContactForm::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new ContactForm)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $contacts = $contacts->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }


        $contacts = $contacts->orderBy('id','desc')->paginate($numbers);

        return view('admin.contact.datatable', compact('contacts'));
    }


    public function delete($id)
    {
        $contact = ContactForm::find($id)->delete();

        return ['message' => ' Contact Deleted Successfully'];
    }

    public function status($id)
    {
        $contact = ContactForm::find($id);
        if($contact->status == 'Completed'){
            $contact->status = 'Pending';
        }else{
            $contact->status = 'Completed';
        }
        $contact->save();

        return $contact->status;
    }
}
