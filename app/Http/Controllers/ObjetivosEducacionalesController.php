<?php

namespace App\Http\Controllers;

use App\Models\ObjetivosEducacionales;
use Illuminate\Http\Request;

class ObjetivosEducacionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $objetivos = ObjetivosEducacionales::all();

            return response()->json([
                'objetivos educacionales' => $objetivos,
                'message' => $objetivos->isEmpty() ? 'No hay objetivos registrados' : 'Completado',
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
    public function show(ObjetivosEducacionales $objetivosEducacionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ObjetivosEducacionales $objetivosEducacionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ObjetivosEducacionales $objetivosEducacionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObjetivosEducacionales $objetivosEducacionales)
    {
        //
    }
}
