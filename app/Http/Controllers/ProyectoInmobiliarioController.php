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

    public function search(Request $request)
    {
        $proyectos = ProyectoInmobiliario::buscar($request->all())->get();
        return response()->json($proyectos);
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
    public function update(Request $request, $id)
    {
        // Encuentra el proyecto por ID
        $proyecto = ProyectoInmobiliario::find($id);

        // Si no se encuentra el proyecto, devuelve un error 404
        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        // Valida los datos enviados en la solicitud
        $validatedData = $request->validate([
            'nombre_proyecto' => 'sometimes|string|max:255',
            'descripcion'     => 'sometimes|string',
            'ubicacion'       => 'sometimes|string|max:255',
            'fecha_inicio'    => 'sometimes|date',
            'fecha_fin'       => 'sometimes|date',
            'estado'          => 'sometimes|in:En Construcción,Terminado,Cancelado,Otro',
        ]);

        // Actualiza el proyecto con los datos validados
        $proyecto->update($validatedData);

        // Devuelve el proyecto actualizado
        return response()->json($proyecto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProyectoInmobiliario $proyectoInmobiliario)
    {
        //
    }
}
