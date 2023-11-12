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
        Schema::create('carga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camion_id');
            $table->unsignedBigInteger('material_id');
            $table->integer('cantidad_kilos');
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->foreign('camion_id')->references('id')->on('camion');
            $table->foreign('material_id')->references('id')->on('material');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carga');
    }
};
