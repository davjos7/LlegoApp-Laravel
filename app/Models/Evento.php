<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'hora',
        'direccion',
        'referencia',
        'organizador',
        'requisitos',
        'motivo',
        'costo_total'
    ];
}
