<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'nombre' => 'Bot1',
            'apellido' => 'Bot1',
            'fecha' => '2000-02-29', 
            'tipo' => 'A-',
            'telefono' => '921123722',
            'email' => 'admin@gmail.com',
            'comentario' => '',
            'verificacion' =>'Proceso',
            'terminos' => 'Aceptado',
        ]);
        Banner::create([
            'nombre' => 'Bot1',
            'apellido' => 'Bot1',
            'fecha' => '2000-02-29', 
            'tipo' => 'A-',
            'telefono' => '921123722',
            'email' => 'admin@gmail.com',
            'comentario' => '',
            'verificacion' =>'Proceso',
            'terminos' => 'Aceptado',
        ]);
    }
}
