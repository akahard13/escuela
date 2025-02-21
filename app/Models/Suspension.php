<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspension extends Model {
    use HasFactory;

    protected $table = 'estudiantes.suspensiones';
    protected $fillable = ['estudiante', 'fecha_inicio', 'fecha_fin'];

    // Relación con el modelo Matricula
    public function matricula() {
        return $this->belongsTo(Matricula::class, 'estudiante');
    }
}
