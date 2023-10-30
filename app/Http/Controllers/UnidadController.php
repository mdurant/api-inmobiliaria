<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidad = Unidad::all();
        if ($unidad->isEmpty()) {
            return response()->json([
                'status' => 200,
                'message' => 'No se encontraron unidades o la consulta está vacía',
                'data' =>[]
            ], 200);
        }
        return response()->json($unidad, 200);
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
            'numero' => 'required|integer',
            'tipo_unidad' => 'required|string',
            'metraje' => 'required|string',
            'precio' => 'required|numeric',
            'estado' => 'required|string',
            'proyecto_inmobiliario_id' => 'required|string'
        ]);



        $unidad = Unidad::create($data);
        dd($unidad);
        Log::info('Unidad data:', ['unidad' => $unidad]);

        return response()->json(['unidad' =>$unidad, 'message'=>'Unidad Propiedad creada correctamente'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(unidad $unidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unidad $unidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unidad $unidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unidad $unidad)
    {
        //
    }
}
