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
        Schema::create('presencas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_t_presenca');
            $table->unsignedBigInteger('id_classe');
            $table->date('data');
            $table->foreign('id_t_presenca')->references('id')->on('tipo_presencas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_classe')->references('id')->on('classes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presencas');
    }
};
