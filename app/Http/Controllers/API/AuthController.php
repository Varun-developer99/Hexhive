<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Customer;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Mail\RegisterOtpMail;
use Illuminate\Validation\Rule;
use App\Mail\WarehouseRegisterMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|'.Rule::unique('customers', 'email')->ignore($request->email)->whereNull('deleted_at')->where('status', 'Active'),
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }
        $input = $request->all();
        $input['otp'] = rand(100000, 999999); // Generate a random OTP
        $input['otp_expires_at'] = now()->addMinutes(10); // Set OTP expiration time
        $input['status'] = 'Inactive'; // Set initial status
        $input['password'] = Hash::make($request->password); // Hash the password
        $input['show_password'] = $request->password; // Store the plain password for display purposes
        // Create the customer
        $customer = Customer::updateOrCreate(['email' => $input['email']], $input);

        try {
            Mail::to($customer->email)->send(new RegisterOtpMail($customer->otp));
        } catch (\Exception $e) {
            \Log::error('Failed to send OTP email: ' . $e->getMessage());
        }

        $response = [
            'status' => 'success',
            'message' => 'Registration successful. Please verify your phone number with the OTP sent.',
            'phone' => $customer->phone,
            'otp' => $customer->otp,
            'otp_expires_at' => $customer->otp_expires_at,
        ];

        return response()->json($response, 201);
    }

    public function verify_login_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'otp' => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Customer::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$customer) {
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP'], 401);
        }

        // Update customer status to Active
        $customer->status = 'Active';
        $customer->otp = null; // Clear OTP after successful verification
        $customer->otp_expires_at = null; // Clear OTP expiration time
        $customer->save();
        // Optionally, you can log the user in
        $token = $customer->createToken(env('APP_NAME'))->plainTextToken;

        return response()->json(['status' => 'success', 'message' => 'E-Mail verified successfully', 'userData' => $customer, 'token' => $token], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email');
        $validator = Validator::make($credentials, [
            'email' => 'required|email|exists:customers,email',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Customer::where('email', $credentials['email'])->where('status', 'Active')->first();
        if ($customer && Hash::check($request->password, $customer->password)) {
            $token = $customer->createToken(env('APP_NAME'))->plainTextToken;
            return response()->json(['status' => 'success', 'message' => 'E-Mail verified successfully', 'userData' => $customer, 'token' => $token], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid credentials'], 401);
        }

    }

    public function resend_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            // Generate a new OTP
            $customer->otp = rand(100000, 999999);
            $customer->otp_expires_at = now()->addMinutes(10); // Set OTP expiration time
            $customer->save();

            try {
                Mail::to($customer->email)->send(new RegisterOtpMail($customer->otp));
            } catch (\Exception $e) {
                \Log::error('Failed to send OTP email: ' . $e->getMessage());
            }
            
            // For this example, we'll just return it in the response
            return response()->json([
                'status' => 'success',
                'message' => 'OTP resent successfully.',
                'email' => $customer->email,
                'otp' => $customer->otp,
                'otp_expires_at' => $customer->otp_expires_at,
            ], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Customer not found or inactive'], 404);
        }

    }

    
    public function verify_token(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Auth::guard('sanctum')->user();

        dd($customer);

        if (!$customer) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json(['message' => 'Token is valid', 'user' => $customer], 200);
    }

    public function warehouse_register(Request $request)
    {
        if ($warehouse = User::where('phone', $request->phone)->first()) {
            return response()->json(['status' => 'error', 'message' => 'Phone number already exists'], 200);
        }
        if ($user = User::where('email', $request->email)->first()) {
            return response()->json(['status' => 'error', 'message' => 'Email address already exists'], 200);
        }
        $input = $request->all();
        $input['created_by_id'] = 0;
        $input['status'] =  0;
        $input['name'] =  $request->warehouse_name;
        $input['password'] = Hash::make($request->phone);
        $input['show_password'] = $request->phone;
        
        // If validation passes, create the warehouse
        $user = User::create($input);
        $user->email_verified_at = now();
        $user->role_as = 'Warehouse';
        $user->save();

        Mail::to($user->email)->send(new WarehouseRegisterMail($user));

        // dd($request->all());
        if($request->hasFile('drug_license')) {
            $user->addMedia($request->file('drug_license'))->toMediaCollection('drug_license');
        }
        if($request->hasFile('gst_certificate')) {
            $user->addMedia($request->file('gst_certificate'))->toMediaCollection('gst_certificate');
        }

        return response()->json(['status' => 'success', 'message' => 'Warehouse registered successfully', 'warehouse' => $warehouse], 200);
    }

    public function forgetpassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            // Generate a new OTP
            $customer->otp = rand(100000, 999999);
            $customer->otp_expires_at = now()->addMinutes(10); // Set OTP expiration time
            $customer->save();

            try {
                Mail::to($customer->email)->send(new RegisterOtpMail($customer->otp));
            } catch (\Exception $e) {
                \Log::error('Failed to send OTP email: ' . $e->getMessage());
            }

            // For this example, we'll just return it in the response
            return response()->json([
                'status' => 'success',
                'message' => 'OTP resent successfully.',
                'email' => $customer->email,
                'otp' => $customer->otp,
                'otp_expires_at' => $customer->otp_expires_at,
            ], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Customer not found or inactive'], 404);
        }

    }

    public function savepassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $customer = Customer::where('email', $request->email)->first();

        if (!$customer) {
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP'], 401);
        }

        // Update customer password
        $customer->password = Hash::make($request->password);
        $customer->show_password = $request->password; // Store the plain password for display purposes
        $customer->save();

        return response()->json(['status' => 'success', 'message' => 'Password updated successfully'], 200);
    }
}

