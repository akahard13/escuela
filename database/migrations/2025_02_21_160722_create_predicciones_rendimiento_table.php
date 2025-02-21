<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('administracion.predicciones_rendimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante');
            $table->unsignedBigInteger('asignatura');
            $table->decimal('probabilidad_riesgo', 5, 2)->check('probabilidad_riesgo >= 0 AND probabilidad_riesgo <= 100');
            $table->timestamp('fecha_prediccion')->useCurrent();
            $table->foreign('estudiante')->references('id')->on('estudiantes.estudiantes')->onDelete('cascade');
            $table->foreign('asignatura')->references('id')->on('administracion.asignaturas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('administracion.predicciones_rendimiento');
    }
};
