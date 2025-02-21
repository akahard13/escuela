<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('catalogos.cat_estado_asistencia')->insert([
            ['nombre' => 'Presente', 'created_at' => now()],
            ['nombre' => 'Ausente', 'created_at' => now()],
            ['nombre' => 'Justificado', 'created_at' => now()],
        ]);

        DB::table('catalogos.cat_estado_estudiantes')->insert([
            ['nombre' => 'Activo', 'created_at' => now()],
            ['nombre' => 'Expulsado', 'created_at' => now()],
            ['nombre' => 'Suspendido', 'created_at' => now()],
        ]);

        DB::table('catalogos.cat_roles')->insert([
            ['nombre' => 'Administrador', 'created_at' => now()],
            ['nombre' => 'Docente', 'created_at' => now()],
            ['nombre' => 'Estudiante', 'created_at' => now()],
        ]);
    }
}
