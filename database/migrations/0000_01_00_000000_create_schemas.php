<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        DB::statement('CREATE SCHEMA IF NOT EXISTS catalogos');
        DB::statement('CREATE SCHEMA IF NOT EXISTS estudiantes');
        DB::statement('CREATE SCHEMA IF NOT EXISTS docentes');
        DB::statement('CREATE SCHEMA IF NOT EXISTS administracion');
    }

    public function down()
    {
        // Eliminar esquemas (¡cuidado! Esto borrará todas las tablas dentro de ellos)
        DB::statement('DROP SCHEMA IF EXISTS catalogos CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS estudiantes CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS docentes CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS administracion CASCADE');
    }
};
