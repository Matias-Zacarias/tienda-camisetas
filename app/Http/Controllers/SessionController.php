<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Mostrar todas las sesiones
     */
    public function index()
    {
        return response()->json(

            Session::with('user')
                ->latest('last_activity')
                ->get()

        );
    }

    /**
     * Crear sesión
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'id' => 'required|string|max:255|unique:sessions,id',

            'user_id' => 'nullable|exists:users,id',

            'ip_address' => 'nullable|string|max:45',

            'user_agent' => 'nullable|string',

            'payload' => 'required|string',

            'last_activity' => 'required|integer',
        ]);

        $session = Session::create($validated);

        return response()->json([
            'message' => 'Sesión creada correctamente',

            'data' => $session->load('user')
        ], 201);
    }

    /**
     * Mostrar sesión específica
     */
    public function show(string $id)
    {
        $session = Session::with('user')
            ->findOrFail($id);

        return response()->json($session);
    }

    /**
     * Actualizar sesión
     */
    public function update(Request $request, string $id)
    {
        $session = Session::findOrFail($id);

        $validated = $request->validate([

            'user_id' => 'nullable|exists:users,id',

            'ip_address' => 'nullable|string|max:45',

            'user_agent' => 'nullable|string',

            'payload' => 'sometimes|required|string',

            'last_activity' => 'sometimes|required|integer',
        ]);

        $session->update($validated);

        return response()->json([
            'message' => 'Sesión actualizada correctamente',

            'data' => $session->load('user')
        ]);
    }

    /**
     * Eliminar sesión
     */
    public function destroy(string $id)
    {
        $session = Session::findOrFail($id);

        $session->delete();

        return response()->json([
            'message' => 'Sesión eliminada correctamente'
        ]);
    }
}