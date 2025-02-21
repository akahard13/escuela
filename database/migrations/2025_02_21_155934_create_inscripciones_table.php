<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('administracion.inscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante');
            $table->unsignedBigInteger('grupo');
            $table->date('fecha_inscripcion')->default(now());
            $table->foreign('estudiante')->references('id')->on('estudiantes.estudiantes')->onDelete('cascade');
            $table->foreign('grupo')->references('id')->on('administracion.grupos')->onDelete('cascade');
            $table->unique(['estudiante', 'grupo']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('docentes.asistencias', function (Blueprint $table) {
            $table->dropForeign(['id_inscripcion']);
        });
        Schema::dropIfExists('administracion.inscripciones');
    }
};
