<?php

namespace App\Http\Controllers;

use App\Models\ProyectoInmobiliario;
use Illuminate\Http\Request;

class ProyectoInmobiliarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectoInmobiliario = ProyectoInmobiliario::all();
        return response()->json($proyectoInmobiliario, 200);
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
        $data = $request->validate([
            'nombre_proyecto' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'estado' => 'required|string'
        ]);

        $proyectoInmobiliario = ProyectoInmobiliario::create($data);

        return response()->json(['proyectoInmobiliario' =>$proyectoInmobiliario, 'message'=>'Proyecto Inmobiliario creado correctamente'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProyectoInmobiliario $proyectoInmobiliario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProyectoInmobiliario $proyectoInmobiliario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProyectoInmobiliario $proyectoInmobiliario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProyectoInmobiliario $proyectoInmobiliario)
    {
        //
    }
}
