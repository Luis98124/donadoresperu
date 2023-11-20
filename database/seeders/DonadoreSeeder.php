<?php

namespace Database\Seeders;

use App\Models\Donadore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;




class DonadoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Donadore::create([
            'usuario' => 'BOT1',
            'dni' => '12345678',
            'talla' => '165',
            'fnacimiento' => '2000-02-29', 
            'peso' => '65',
            'sexo' => 'N/S',
            'fecha' => '2020-02-29',
            'tipo' => 'A-',
            'telefono' => '123456789',
            'correo' => 'BOT@gmail.com',
            'verificaccion' =>'Proceso',
            'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT2',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29',  
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'A+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT3',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'B+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT4',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29',  
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'B-',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT5',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'AB-',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT6',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'AB+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT7',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'O-',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT8',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'O+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT9',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'RH-',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOT10',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2020-02-29',
        'tipo' => 'RH+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);
    Donadore::create([
        'usuario' => 'BOTFECHA',
        'dni' => '12345678',
        'talla' => '165',
        'fnacimiento' => '2000-02-29', 
        'peso' => '65',
        'sexo' => 'N/S',
        'fecha' => '2023-11-01',
        'tipo' => 'RH+',
        'telefono' => '123456789',
        'correo' => 'BOT@gmail.com',
        'verificaccion' =>'Proceso',
        'terminos' => 'Aceptado',
    ]);

    }
}
