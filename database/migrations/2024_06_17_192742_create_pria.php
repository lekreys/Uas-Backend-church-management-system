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
        Schema::create('pria', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('tanggal_lahir');
            $table->integer('umur'); 
            $table->enum('wilayah', ['1', '2', '3', '4']);
            $table->string("nama_istri");
            $table->string("alamat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pria');
    }
};
