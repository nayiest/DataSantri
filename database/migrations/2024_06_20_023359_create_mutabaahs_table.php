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
        Schema::create('mutabaahs', function (Blueprint $table) {

            $table->id();
            $table->string('namasantri');
            $table->integer('IT');
            $table->integer('Fiqih');
            $table->integer('Hadis');
            $table->integer('BahasaInggris');
            $table->integer('BahasaArab');
            $table->integer('Quran');            
            $table->integer('Polygon');
            $table->timestamps();
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutabaahs');
    }
};
