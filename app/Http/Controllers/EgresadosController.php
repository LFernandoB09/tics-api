<?php

namespace App\Http\Controllers;

use App\Models\Egresados;
use Illuminate\Http\Request;

class EgresadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $egresados = Egresados::all();

            return response()->json([
                'materias' => $egresados,
                'message' => $egresados->isEmpty() ? 'No hay agresados registrados' : 'Completado',
                'status' => 200
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error en el servidor',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Egresados $egresados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Egresados $egresados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Egresados $egresados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egresados $egresados)
    {
        //
    }
}
