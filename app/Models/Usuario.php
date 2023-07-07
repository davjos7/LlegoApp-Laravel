<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
       'nombre',
       'apellido',
       'fecha_nacimiento',
       'telefono',
       'correo',
       'plata',
       'ciudad',
       'yape',
       'plin',
       'genero',
       'contraseña'
    ];
}
