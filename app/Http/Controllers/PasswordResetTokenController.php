<?php

namespace App\Http\Controllers;

use App\Models\PasswordResetToken;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasswordResetTokenController extends Controller
{
    /**
     * Mostrar todos los tokens
     */
    public function index()
    {
        return response()->json(

            PasswordResetToken::latest('created_at')
                ->get()

        );
    }

    /**
     * Crear token
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required|email|max:255',
        ]);

        $token = PasswordResetToken::updateOrCreate(

            [
                'email' => $validated['email']
            ],

            [
                'token' => Str::random(60),

                'created_at' => now(),
            ]
        );

        return response()->json([
            'message' => 'Token generado correctamente',

            'data' => $token
        ], 201);
    }

    /**
     * Mostrar token específico
     */
    public function show(string $email)
    {
        $token = PasswordResetToken::findOrFail($email);

        return response()->json($token);
    }

    /**
     * Actualizar token
     */
    public function update(Request $request, string $email)
    {
        $token = PasswordResetToken::findOrFail($email);

        $validated = $request->validate([

            'token' => 'sometimes|required|string',
        ]);

        $token->update($validated);

        return response()->json([
            'message' => 'Token actualizado correctamente',

            'data' => $token
        ]);
    }

    /**
     * Eliminar token
     */
    public function destroy(string $email)
    {
        $token = PasswordResetToken::findOrFail($email);

        $token->delete();

        return response()->json([
            'message' => 'Token eliminado correctamente'
        ]);
    }
}