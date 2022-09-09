<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $dataValidation = $request->validate([
            'name' => 'required|string|max:255',
            'email'  =>'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $dataValidation['name'],
            'email' => $dataValidation['email'],
            'password' => Hash::make($dataValidation['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }
}
