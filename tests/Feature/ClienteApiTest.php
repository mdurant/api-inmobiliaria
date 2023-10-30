<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteApiTest extends TestCase
{

    //use RefreshDabase;

    /* @Test Cliente*/

    public function a_cliente_can_be_created()
    {
        $response = $this->postJson('api/insertar-clientes', [
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'rut' => '12345678-9',
            'telefonocontacto' => '12345678',
            'correoelectronico' => 'correo@123.cl'
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('clientes',['nombre' => 'Juan']);

    }

    /** @test */
    public function clientes_can_be_listed()
    {
        // Crear 3 clientes
        $this->postJson('/api/insertar-clientes', ['nombre' => 'Cliente 1']);
        $this->postJson('/api/insertar-clientes', ['nombre' => 'Cliente 2']);
        $this->postJson('/api/insertar-clientes', ['nombre' => 'Cliente 3']);

        $response = $this->getJson('/api/listar-clientes');

        $response->assertStatus(200);
        $response->assertJsonCount(3, 'data');
    }

    /** @test */
    public function validation_error_when_creating_cliente_with_invalid_data()
    {
        $response = $this->postJson('/api/insertar-clientes', [
          'nombre' => 'Juan',
          'apellido' => 'Perez',
          'rut' => '12345678-9',
          'telefonocontacto' => '12345678',
          'correoelectronico' => 'correo@123.cl'
        ]);

        $response->assertStatus(422); // Error de validación
        $response->assertJsonValidationErrors('nombre', 'apellido','telefonocontacto','correoelectronico');
    }
}
