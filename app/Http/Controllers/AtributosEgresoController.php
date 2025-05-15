<?php

namespace App\Http\Controllers;

use App\Models\AtributosEgreso;
use Illuminate\Http\Request;

class AtributosEgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $atributos = AtributosEgreso::all();

            return response()->json([
                'atributos de egreso' => $atributos,
                'message' => $atributos->isEmpty() ? 'No hay atributos de agreso' : 'Completado',
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
    public function show(AtributosEgreso $atributosEgreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AtributosEgreso $atributosEgreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AtributosEgreso $atributosEgreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AtributosEgreso $atributosEgreso)
    {
        //
    }
}
