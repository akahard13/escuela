<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model {
    use HasFactory;

    protected $table = 'administracion.personal';
    protected $fillable = ['usuario', 'nombre', 'apellido', 'inss', 'fecha_contratacion'];

    // Relación con el modelo Usuario
    public function usuario() {
        return $this->belongsTo(User::class, 'usuario', 'id');
    }
}
