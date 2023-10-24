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
<<<<<<< HEAD
            'tipo' => 'a+',
=======
            'tipo' => 'A+',
>>>>>>> gula
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
        $response = $this->get('/banner'); 

        $response->assertStatus(200); // Check that the response is OK
        $response->assertViewIs('banner.index'); // Check that the correct view is returned
        // Add more assertions as needed
    }
    //public function testMapaView()
    //{
       // $response = $this->get('banner.mapa'); 

        //$response->assertStatus(200); // Verifica que la vista se cargue correctamente (código 200)
       // $response->assertViewIs('banner.hospital'); // Reemplaza 'mapa' con el nombre real de tu vista
       // $response->assertSee('ESSALUD II Consultorios'); // Reemplaza con el texto esperado en la vista
       // $response->assertSee('HOSPITAL SIMON BOLÍVAR');
       // $response->assertSee('EsSalud Hospital II');
       // $response->assertSee('HOSPITAL REGIONAL');
   // }
    
}

