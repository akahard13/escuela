<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $fillable = ['usuario',  'nombre', 'apellido', 'especialidad', 'inss', 'fecha_contratacion'];
    public $timestamps = true;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario');
    }
}
