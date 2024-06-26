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
        Schema::create('Data_Kriteria', function (Blueprint $table) {
            $table->id('ID_DataKriteria');
            $table->unsignedBigInteger('ID_Kriteria');
            $table->string('kategori');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('ID_Kriteria')->references('ID_Kriteria')->on('Kriteria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Data_Kriteria');
    }
};
