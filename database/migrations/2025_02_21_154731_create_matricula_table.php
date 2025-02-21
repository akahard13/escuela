<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('estudiantes.matricula', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante');
            $table->unsignedBigInteger('anyo_academico');
            $table->unsignedBigInteger('estado')->default(1);
            $table->foreign('estudiante')->references('id')->on('estudiantes.estudiantes')->onDelete('cascade');
            $table->foreign('anyo_academico')->references('id')->on('administracion.anios_academicos')->onDelete('cascade');
            $table->foreign('estado')->references('id')->on('catalogos.cat_estado_estudiantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('estudiantes.matricula');
    }
};
