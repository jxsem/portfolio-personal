<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('image_url')->nullable(false);
            $table->string('github_url')->nullable(false); // Agrega el campo para la URL de GitHub -> para ver el código fuente del proyecto
            $table->string('demo_url')->nullable(false); // Agrega el campo para la URL de la demo -> para ver el producto finalizado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
