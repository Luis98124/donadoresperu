<?php

namespace Database\Seeders;

use App\Models\Solicitud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Ignition\Contracts\Solution;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solicitud::create([
            'solicitante' => 'usuario',
            'nombre_apellidos' => 'Bot1',
            'DNI' => '12345678',
            'tipo_sangre' => 'A-',
            'terminos' => 'Aceptado',
        ]);
        Solicitud::create([
            'solicitante' => 'familiar',
            'nombre_apellidos' => 'Bot2',
            'DNI' => '12345678',
            'tipo_sangre' => 'A+',
            'terminos' => 'Aceptado',
        ]);
        Solicitud::create([
            'solicitante' => 'usuario',
            'nombre_apellidos' => 'Bot3',
            'DNI' => '12345678',
            'tipo_sangre' => 'B-',
            'terminos' => 'Aceptado',
        ]);

    }
}
