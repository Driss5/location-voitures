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
        Schema::create('car_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('sieges');
            $table->integer('portes');
            $table->integer('bagages');
            $table->string('boite');
            $table->string('kilometrage');
            $table->string('station');
            $table->foreignId('car_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_informations');
    }
};
