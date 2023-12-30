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
        Schema::create('pelajarans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama_pelajaran',50);
            $table->string('deskripsi',50);
            $table->uuid('id_guru');
            $table->foreign('id_guru')->references('id')->on('gurus')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelajarans');
    }
};
