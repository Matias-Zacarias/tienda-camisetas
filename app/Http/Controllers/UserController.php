<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Mostrar todos los usuarios
     */
    public function index()
    {
        return response()->json(

            User::withCount('pedidos')
                ->select(
                    'id',
                    'name',
                    'email',
                    'role',
                    'created_at',
                    'created_at'
                )
                ->latest()
                ->get()

        );
    }

    /**
     * Crear usuario
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|max:255|unique:users,email',

            'password' => 'required|string|min:6',

            'role' => 'nullable|string|max:50',
        ]);

        $user = User::create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'password' => Hash::make($validated['password']),

            'role' => $validated['role'] ?? 'user',
        ]);

        return response()->json([
            'message' => 'Usuario creado correctamente',

            'data' => $user->load('pedidos')
        ], 201);
    }

    /**
     * Mostrar usuario específico
     */
    public function show(string $id)
    {
        $user = User::with('pedidos')
            ->findOrFail($id);

        return response()->json($user);
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([

            'name' => 'sometimes|required|string|max:255',

            'email' => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,

            'password' => 'nullable|string|min:6',

            'role' => 'nullable|string|max:50',
        ]);

        if (isset($validated['password'])) {

            $validated['password'] = Hash::make(
                $validated['password']
            );
        }

        $user->update($validated);

        return response()->json([
            'message' => 'Usuario actualizado correctamente',

            'data' => $user->load('pedidos')
        ]);
    }


    public function updateRole(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'role' => 'required|string|max:50'
        ]);

        $user->update([
            'role' => $validated['role']
        ]);

        return response()->json([
            'message' => 'Rol actualizado correctamente'
        ]);
    }

    /**
     * Eliminar usuario
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json([
            'message' => 'Usuario eliminado correctamente'
        ]);
    }
}