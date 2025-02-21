<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatRoles extends Model
{
    use HasFactory;

    protected $table = 'catalogos.cat_roles';
    public $timestamps = true;

    protected $fillable = ['nombre', 'activo', 'eliminado'];
}
