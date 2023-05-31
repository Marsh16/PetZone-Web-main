<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLogController extends Controller
{
    function userOpensApp() {
        UserLog::create([
            'log_type' => 0
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => ''
        ]);
    }
    
    function signUp(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Failed to sign you up, there's an error in your data."
            ]);
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone,
                'address' => $request->address,
                'password' => Hash::make($request->password)
            ]);
            
            return response()->json([
                'status' => 200,
                'message' => "User Successfully Signed Up."
            ]);
        } catch (QueryException $err) {
            if (str_contains($err->getMessage(), '1062 Duplicate') && str_contains($err->getMessage(), 'users_email_unique')) {
                return response()->json([
                    'status' => 500,
                    'message' => 'Email is already used.'
                ]);
            } else if (str_contains($err->getMessage(), '1062 Duplicate') && str_contains($err->getMessage(), 'users_phone_number_unique')) {
                return response()->json([
                    'status' => 500,
                    'message' => "Phone Number is already used."
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => $err
                ]);
            }
        }
    }
    
    function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Failed to login, there's an error in your data."
            ]);
        }
        
        $user = User::where("email", "=", $request->email)->first();

        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'Email does not exist.',
                'data' => ''
            ]);
        }
        
        if (Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $user->id
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Password does not match.',
                'data' => ''
            ]);
        }
    }
}
