<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('catalogos.cat_estado_asistencia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20);
            $table->boolean('activo')->default(true);
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('docentes.asistencias', function (Blueprint $table) {
            $table->dropForeign(['estado']);
        });
        Schema::dropIfExists('catalogos.cat_estado_asistencia');
    }
};
