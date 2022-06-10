<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricante';
    use HasFactory;
    protected $fillable = [
        'nombre_fabricante',
    ];
}
