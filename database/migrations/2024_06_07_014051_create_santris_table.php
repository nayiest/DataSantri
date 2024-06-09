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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
<<<<<<< HEAD
            $table->string('jk_santri');
            $table->string('angkatan_santri');
            $table->date('tgllahir_santri');
            $table->string('domisili_santri');
            $table->string('alamat_santri');
            $table->string('photo_santri');
=======
            $table->string('gender_santri');
            $table->integer('angkatan_santri');
>>>>>>> 220f9f8dcf9f200ca434f570baf9a9fb0baed74d
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
