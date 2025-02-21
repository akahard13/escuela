<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('estudiantes.estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario')->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('carnet', 25)->unique();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('direccion')->nullable();
            $table->string('telefono', 15)->nullable();
            $table->foreign('usuario')->references('id')->on('public.users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes.estudiantes');
    }
};
