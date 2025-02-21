<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('permissions_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission')->constrained('permissions')->onDelete('cascade');
            $table->foreignId('user')->constrained('users')->onDelete('cascade');
            $table->foreignId('page')->constrained('pages')->onDelete('cascade');
            $table->boolean('activo')->default(true);
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions_users');
    }
};

