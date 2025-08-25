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
        Schema::create('sala_pivo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idSala')->references('idSala')->on('sala');
            $table->foreignId('idFilme')->references('idFilme')->on('filme');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala_pivo');
    }
};
