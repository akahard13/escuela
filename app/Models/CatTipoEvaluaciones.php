<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatTipoEvaluaciones extends Model
{
    use HasFactory;

    protected $table = 'catalogos.cat_tipos_evaluaciones';
    public $timestamps = true;

    protected $fillable = ['nombre', 'activo', 'eliminado'];
}