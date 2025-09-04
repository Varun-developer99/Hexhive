<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class WebsiteController extends Controller
{
    public function index()
    {   
        return view('admin.settings.website-setting.index');
    }
    public function insert(request $request)
    {   
        $replacements[env('APP_NAME')] = $request->name;
        
        if($request->hasfile('logo_light')){
            $random_file_name = rand(00000,99999);
            $file = $request->logo_light;
            $file_name = 'logo_light'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/website',$file_name);
            $replacements[env('APP_LOGO_LIGHT')]= '/uploads/website/'.$file_name;
            if(file_exists(public_path(env('APP_LOGO_LIGHT')))){
                unlink(public_path(env('APP_LOGO_LIGHT')));
            }
        }
        if($request->hasfile('logo_dark')){
            $random_file_name = rand(00000,99999);
            $file = $request->logo_dark;
            $file_name = 'logo_dark'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/website',$file_name);
            $replacements[env('APP_LOGO_DARK')]= '/uploads/website/'.$file_name;
            if(file_exists(public_path(env('APP_LOGO_DARK')))){
                unlink(public_path(env('APP_LOGO_DARK')));
            }
        }
        if($request->hasfile('favicon')){
            $random_file_name = rand(00000,99999);
            $file = $request->favicon;
            $file_name = 'favicon'.time() . $random_file_name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/website',$file_name);
            $replacements[env('APP_FAVICON')]= '/uploads/website/'.$file_name;
            if(file_exists(public_path(env('APP_FAVICON')))){
                unlink(public_path(env('APP_FAVICON')));
            }
        }

        // Read the contents of the .env file
        $contents = file_get_contents(base_path('.env'));

        // Replace the values of the environment variables
        foreach ($replacements as $search => $replace) {
            $contents = str_replace($search, $replace, $contents);
        }

        // Write the updated contents to the .env file
        file_put_contents(base_path('.env'), $contents);
        
        return redirect()->back()->with('success','Website Setting Update Successfully');
    }

    public function edit_profile_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(Auth::id())->whereNull('deleted_at'),
            ],
            'phone' => 'required|string|max:15',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
            $user->show_password = $request->password;
        }
        $user->save();

        return response()->json([
                'id' => 0,
                'html' => '',
                'message' => 'Profile updated successfully.'
            ], 200);
    }

    public function media_delete($id)
    {
        $media = Media::find($id);
        $media->delete();
        return redirect()->back()->with('success','File Deleted Successfully');
    }
    
    public function user_login($id)
    {
        Auth::loginUsingId($id);
        return redirect()->route('admin.dashboard');
    }
}
