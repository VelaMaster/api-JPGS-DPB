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
        Schema::create('dragons', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rareza');
            $table->string('elemento');
            $table->string('imagen')->nullable(); // Url o path de la imagen
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dragons');
    }
};
