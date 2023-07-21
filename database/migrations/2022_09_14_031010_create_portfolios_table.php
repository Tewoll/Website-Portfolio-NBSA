<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nama')->unique();
            $table->string('slug')->unique();
            $table->integer('kategori_portfolio_id');
            $table->longText('deskripsi');
            $table->integer('lokasi_id');
            $table->string('foto');
            $table->string('lama');
            $table->year('mulai');
            $table->year('selesai');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
};
