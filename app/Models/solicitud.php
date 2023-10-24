<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitud
 *
 * @property $id
 * @property $solicitante
 * @property $nombre_apellidos
 * @property $DNI
 * @property $tipo_sangre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitud extends Model
{
    
<<<<<<< HEAD
    static $rules = [
      'solicitante' => 'required|in:usuario,familiar',
      'nombre_apellidos' => 'required|string',
      'DNI' => 'required|string|regex:/^[1-9][0-9]{7}$/|max:8',
      'tipo_sangre' => 'required|in:a-,A-,b-,B-,ab-,AB-,o-,O-,rh-,RH-,a+,A+,b+,B+,ab+,AB+,o+,O+,rh+,RH+'
    ];
=======
>>>>>>> gula

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['solicitante','nombre_apellidos','DNI','tipo_sangre'];



}
