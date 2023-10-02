<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donadore extends Model
{
    use HasFactory;
}
class User extends Model
{
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
