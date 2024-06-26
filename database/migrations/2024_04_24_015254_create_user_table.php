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
        Schema::create('User', function (Blueprint $table) {
            $table->id('ID_User');
            $table->unsignedBigInteger('ID_RW');
            $table->string('nama',100);
            $table->string('username',50);
            $table->string('password',255);
            $table->enum('level',['adminrw','adminpkk']);
            $table->timestamps();

            $table->foreign('ID_RW')->references('ID_RW')->on('RW');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
