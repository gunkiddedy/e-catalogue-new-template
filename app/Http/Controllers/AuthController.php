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
        // $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ]);

        // if (Auth::attempt($request->only('email', 'password'))){
        //     $user = User::first();
        //     $token = $user->createToken('mejikuhibiniu')->plainTextToken;
        //     return response()->json(Auth::user(), 200);
        // }
        // throw ValidationException::withMessages([
        //     'email' =>['The provided credentials are incorect.']
        // ]);

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
    
        $token = $user->createToken('mejiku_hibiniu')->plainTextToken;
    
        $response = [
            'success'   => true,
            'user'      => $user,
            'token'     => $token
        ];
    
        return response()->json($response, 201);

    }
    
    public function logout()
    {
        $user = Auth::id();
        $user->tokens()->delete();
        Auth::logout();
        return response()->json([
            'success'    => true
        ], 200);
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
