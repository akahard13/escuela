<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('administracion.grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asignatura');
            $table->unsignedBigInteger('docente');
            $table->string('nombre_grupo', 50);
            $table->text('horario')->nullable();
            $table->string('aula', 20)->nullable();
            $table->foreign('asignatura')->references('id')->on('administracion.asignaturas')->onDelete('cascade');
            $table->foreign('docente')->references('id')->on('docentes.docentes')->onDelete('cascade');
            $table->unique(['asignatura', 'docente']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('administracion.grupos');
    }
};

