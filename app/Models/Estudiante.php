<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {
    use HasFactory;

    protected $table = 'estudiantes.estudiantes';
    protected $fillable = ['usuario', 'nombre', 'apellido', 'carnet', 'fecha_nacimiento', 'direccion', 'telefono'];

    // Relación con el modelo Usuario
    public function usuario() {
        return $this->belongsTo(User::class, 'usuario');
    }

    // Relación con la matrícula
    public function matriculas() {
        return $this->hasMany(Matricula::class, 'estudiante');
    }
}

