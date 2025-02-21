<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model {
    use HasFactory;
    protected $table = 'administracion.inscripciones';
    protected $fillable = ['estudiante', 'grupo', 'fecha_inscripcion'];

    public function estudiante() {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function grupo() {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }
}
