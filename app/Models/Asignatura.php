<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'administracion.asignaturas';

    protected $fillable = [
        'nombre',
        'codigo',
        'descripcion',
    ];

    public $timestamps = true;
}
