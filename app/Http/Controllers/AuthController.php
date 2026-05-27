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
            'role' => $request->role ?? 'user',
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
        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {

            return response()->json([

                'message' => 'Credenciales inválidas'

            ], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')
            ->plainTextToken;

        return response()->json([

            'message' => 'Login exitoso',

            'token' => $token,

            'user' => $user
        ]);
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        $request->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            'message' => 'Logout correcto'
        ]);
    }
}