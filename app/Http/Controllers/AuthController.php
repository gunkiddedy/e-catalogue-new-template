<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user= User::where('email', $request->email)->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'success'   => false,
                'message' => 'These credentials do not match our records.'
            ], 404);
        }
        
        $response = [
            'success'   => true,
            'user' => $user
        ];
    
        return response()->json($response, 201);
    }


    
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message'    => 'logout success'
        ], 200);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nib' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',
            'password' => 'required|min:6',
            'address' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'zipcode' => 'required',
            'additional_info' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'nib' => $request->nib,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'zipcode' => $request->zipcode,
            'additional_info' => $request->additional_info,
        ]);

        return response()->json(['status' => 'success'], 200);
    }
            
    private function guard()
    {
        return Auth::guard();
    }
}
