<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docentes.asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inscripcion');
            $table->date('fecha');
            $table->unsignedBigInteger('estado')->default(2);
            $table->foreign('id_inscripcion')->references('id')->on('administracion.inscripciones')->onDelete('cascade');
            $table->foreign('estado')->references('id')->on('catalogos.cat_estado_asistencia')->onDelete('cascade');
            $table->unique(['id_inscripcion', 'fecha']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docentes.asistencias');
    }
};
