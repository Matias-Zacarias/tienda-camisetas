<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Registro
     */
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return response()->json([
            'message' => 'Usuario registrado',
            'user' => $user
        ]);
    }

    /**
     * Login
     */
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {

            return response()->json([
                'message' => 'Credenciales inválidas'
            ], 401);
        }

        return response()->json([
            'message' => 'Login correcto',
            'user' => Auth::user()
        ]);
    }

    /**
     * Logout
     */
    public function logout()
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logout correcto'
        ]);
    }
}