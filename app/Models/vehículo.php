<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehículo extends Model
{
    protected $table = 'vehiculos';
    use HasFactory;
    protected $fillable = [
        'numero_placas',
        'tipo',
        'piloto_id',
        'color_id',
        'fabricante_id',
    ];
}
