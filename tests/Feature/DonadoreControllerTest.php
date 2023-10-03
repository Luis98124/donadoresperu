<?php

namespace Tests\Feature;

use App\Models\Donadore;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DonadoreControllerTest extends TestCase
{
    use RefreshDatabase; // Agrega esta línea para que las pruebas tengan acceso a la base de datos

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\App\Http\Middleware\Authenticate::class);
    }

    // pruebas 
    /**
 * Test the store method of the DonadoreController.
 */
public function testStore()
{
    $data = [
        'usuario' => 'john_doe',
        'talla' => 170,
        'edad' => 25,
        'peso' => 70,
        'sexo' => 'M',
        'fecha' => '2023-10-05',
        'tipo' => 'A+',
        // Add other required fields here
    ];

    $response = $this->post('/donadore', $data);

    $response->assertStatus(302); // Check that the response is a redirect
    $response->assertRedirect('/donadore'); // Check that it redirects to the specified URL

    // Verifica que los datos se hayan almacenado en la base de datos correctamente
    $this->assertDatabaseHas('donadores', [
        'usuario' => 'john_doe',
        'talla' => 170,
        'edad' => 25,
        'peso' => 70,
        'sexo' => 'M',
        'fecha' => '2023-10-05',
        'tipo' => 'A+',
    ]);

    // Add more assertions as needed
}
}
