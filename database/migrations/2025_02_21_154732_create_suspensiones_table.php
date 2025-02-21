<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('estudiantes.suspensiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('estudiante')->references('id')->on('estudiantes.matricula')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('estudiantes.suspensiones');
    }
};

