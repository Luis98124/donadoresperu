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
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['solicitante','nombre_apellidos','DNI','tipo_sangre'];



}
