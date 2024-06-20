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
            $table->string('tahajud');
            $table->string('sholat_berjamaah');
            $table->string('dhuha');
            $table->string('wo');
            $table->string('puasa');
            $table->string('dzikir_pp');            
            $table->string('nilai');
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
