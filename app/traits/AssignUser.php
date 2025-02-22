<?php

namespace App\Traits;

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Personal;

trait AssignUser
{
    public function assignUser($rol, $user)
    {
        switch ($rol) {
            case 1:
                Personal::create([
                    'usuario' => $user->id,
                    'nombre' => 'Nuevo',
                    'apellido' => 'Usuario',
                    'fecha_contratacion' => now(),
                ]);
                break;
            case 2:
                Docente::create([
                    'usuario' => $user->id,
                    'nombre' => 'Nuevo',
                    'apellido' => 'Usuario',
                    'fecha_contratacion' => now(),
                ]);
                break;
            default:
                return response()->json(['message' => 'Rol no valido'], 400);
        }
    }
}
