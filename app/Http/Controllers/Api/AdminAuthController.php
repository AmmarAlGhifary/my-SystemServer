<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    // Admin login
    public function _invoke(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::guard('admin') ->attempt($credentials)){
            $admin = Auth::guard('admin')->user();
            $token = $admin->createToken('AdminToken') ->plainTextToken;
            return response()->json(['token' => $token, 'admin' => $admin], 200);
        }
        
        return response()->json(['message' => 'Invalid credentials'], 401);
        
    }
    
    // Admin logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
