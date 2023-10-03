<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donadore extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario', // Agrega el atributo 'usuario' a la lista fillable
        'talla',
        'edad',
        'peso',
        'sexo',
        'fecha',
        'tipo',
        // Otros atributos aquí
    ];
}
class User extends Model
{
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
