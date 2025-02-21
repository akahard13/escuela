<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('administracion.notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inscripcion');
            $table->unsignedBigInteger('tipo_evaluacion');
            $table->decimal('nota', 5, 2)->check('nota >= 0 AND nota <= 100');
            $table->date('fecha_registro')->default(now());
            $table->foreign('id_inscripcion')->references('id')->on('administracion.inscripciones')->onDelete('cascade');
            $table->foreign('tipo_evaluacion')->references('id')->on('catalogos.cat_tipos_evaluaciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('administracion.notas');
    }
};
