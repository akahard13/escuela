<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model {
    use HasFactory;
    protected $table = 'docentes.asistencias';
    protected $fillable = ['id_inscripcion', 'fecha', 'estado'];

    public function inscripcion() {
        return $this->belongsTo(Inscripcion::class, 'id_inscripcion');
    }
}
