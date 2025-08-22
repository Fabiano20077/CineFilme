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
        Schema::create('filme', function (Blueprint $table) {
            $table->id('idFilme');
            $table->string('titulo');
            $table->string('genero');
            $table->date('lancamento');
            $table->boolean('classificacao');
            $table->string('poster');
            $table->text('sinopse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filme');
    }
};
