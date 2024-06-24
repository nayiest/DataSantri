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

            // $table->id();
            // $table->integer('tahajud');
            // $table->integer('sholat_berjamaah');
            // $table->integer('dhuha');
            // $table->integer('wo');
            // $table->integer('puasa');
            // $table->integer('dzikir_pp');            
            // $table->integer('nilai');
            // $table->timestamps();

            $table->id();
            $table->integer('IT');
            $table->integer('Fiqih');
            $table->integer('hadis');
            $table->integer('BahasaInggris');
            $table->integer('BahasaArab');
            $table->integer('Quran');            
            $table->integer('polygon');
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
