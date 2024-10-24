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
        Schema::create('equipe_circulos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('equipe')->unique();
            $table->json('casais');
            $table->json('componentes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipe_circulos');
    }
};
