<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnioAcademico extends Model
{
    use HasFactory;

    protected $table = 'administracion.anios_academicos';

    protected $fillable = [
        'anio',
        'fecha_inicio',
        'fecha_fin',
        'activo',
    ];

    public $timestamps = true;
}
