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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('id_pelajaran');
            $table->foreign('id_pelajaran')->references('id')->on('pelajarans')->restrictOnDelete()->restrictOnUpdate();
            $table->uuid('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas')->restrictOnDelete()->restrictOnUpdate();
            $table->string('keterangan',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
