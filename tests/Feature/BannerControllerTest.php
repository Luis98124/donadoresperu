<?php

namespace Tests\Feature;

use App\Http\Controllers\BannerController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User; // Asegúrate de importar el modelo User

class BannerControllerTest extends TestCase
{
    use RefreshDatabase; // Agrega esta línea para que las pruebas tengan acceso a la base de datos

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\App\Http\Middleware\Authenticate::class);
    }

    /**
     * Test the store method of the BannerController.
     */
    public function testStore()
    {
        $data = [
            'nombre' => 'John',
            'apellido' => 'Doe',
            'edad' => 25,
            'telefono' => '123456789',
            'email' => 'johndoe@example.com',
            'tipo' => 'a+',
            // Add other required fields here
        ];

        $response = $this->post('/banner', $data); // Cambia la ruta a '/banner'

        $response->assertStatus(302); // Check that the response is a redirect
        $response->assertRedirect('/'); // Check that it redirects to the specified URL
        // Add more assertions as needed
    }

    /**
     * Test the index method of the BannerController.
     */
    public function testIndex()
    {
        $response = $this->get('/banner'); // Cambia la ruta a '/banner'

        $response->assertStatus(200); // Check that the response is OK
        $response->assertViewIs('banner.index'); // Check that the correct view is returned
        // Add more assertions as needed
    }
}
