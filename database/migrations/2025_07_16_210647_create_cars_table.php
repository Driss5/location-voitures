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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->double('car_prix');
            $table->string('category');
            $table->boolean('disponible');
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3');
            $table->integer('quantite');
            $table->boolean('affiche')->default(0);
            $table->date('date_retour')->nullable();
            $table->date('disponible_on')->nullable();
            $table->string('image');
            $table->boolean('completed_option')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
