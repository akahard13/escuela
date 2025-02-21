<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {
    use HasFactory;

    protected $table = 'estudiantes.matricula';
    protected $fillable = ['estudiante', 'anyo_academico', 'estado'];

    // Relación con el modelo Estudiante
    public function estudiante() {
        return $this->belongsTo(Estudiante::class, 'estudiante');
    }

    // Relación con el modelo Año Académico
    public function anyoAcademico() {
        return $this->belongsTo(AnioAcademico::class, 'anyo_academico');
    }

    // Relación con el estado
    public function estado() {
        return $this->belongsTo(CatEstadoEstudiantes::class, 'estado');
    }
}
