<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('administracion.personal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario')->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('inss', 20)->nullable();
            $table->date('fecha_contratacion')->nullable();
            $table->foreign('usuario')->references('id')->on('public.users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('administracion.personal');
    }
};
