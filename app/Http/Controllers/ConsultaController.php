<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Listar todas las consultas
     */
    public function index()
    {
        return response()->json(
            Consulta::with('user')
                ->latest()
                ->get()
        );
    }

    /**
     * Crear consulta (desde el formulario)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'telefono' => 'nullable|string|max:30',
            'mensaje' => 'required|string|max:2000',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $consulta = Consulta::create($validated);

        return response()->json([
            'message' => 'Consulta enviada correctamente',
            'data' => $consulta,
        ], 201);
    }

    /**
     * Ver una consulta
     */
    public function show(string $id)
    {
        $consulta = Consulta::with('user')->findOrFail($id);

        // Marcar como leída automáticamente al abrir
        if (!$consulta->leida) {
            $consulta->update(['leida' => true]);
        }

        return response()->json($consulta);
    }

    /**
     * Marcar como respondida
     */
    public function marcarRespondida(string $id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta->update(['respondida' => true]);

        return response()->json([
            'message' => 'Consulta marcada como respondida',
            'data' => $consulta,
        ]);
    }

    /**
     * Eliminar consulta
     */
    public function destroy(string $id)
    {
        Consulta::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Consulta eliminada correctamente',
        ]);
    }
}