<?php

namespace App\Http\Controllers;

use App\Models\JefeCarrera;
use Illuminate\Http\Request;

class JefeCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jefe_carreras = JefeCarrera::all();

        return response()->json($jefe_carreras, 200);
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
    public function show(JefeCarrera $jefeCarrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JefeCarrera $jefeCarrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JefeCarrera $jefeCarrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JefeCarrera $jefeCarrera)
    {
        //
    }
}
