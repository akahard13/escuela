<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEstadoAsistencia extends Model
{
    use HasFactory;

    protected $table = 'catalogos.cat_estado_asistencia';
    public $timestamps = true;

    protected $fillable = ['nombre', 'activo', 'eliminado'];
}
