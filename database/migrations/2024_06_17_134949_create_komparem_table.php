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
        Schema::create('komparem', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tanggal_lahir');
            $table->integer('umur'); 
            $table->enum('jenis_kelamin', ['Pria', 'Perempuan']);
            $table->enum('wilayah', ['1', '2', '3', '4']);
            $table->text('tempat_tinggal');
            $table->enum('baptis' , ['sudah' , 'belum']);
            $table->enum('ukuran_baju' , ['S' , 'M' , 'L' , 'XL' , 'XXL']);
            $table->enum('pelayanan' , ['wl' , 'singer' , 'musik' , 'mulmed']);
            $table->string('no_hp');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komparem');
    }
};
