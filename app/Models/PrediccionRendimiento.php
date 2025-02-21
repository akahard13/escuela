<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrediccionRendimiento extends Model {
    use HasFactory;
    
    protected $table = 'administracion.predicciones_rendimiento';
    protected $fillable = ['estudiante', 'asignatura', 'probabilidad_riesgo', 'fecha_prediccion'];

    // Relación con el modelo Estudiante
    public function estudiante() {
        return $this->belongsTo(Estudiante::class, 'estudiante');
    }

    // Relación con el modelo Asignatura
    public function asignatura() {
        return $this->belongsTo(Asignatura::class, 'asignatura');
    }
}
