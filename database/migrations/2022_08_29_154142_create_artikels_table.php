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
        Schema::create('artikel', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('judul');
            $table->string('slug');
            $table->longText('body');
            $table->integer('kategori_id');
            $table->integer('user_id');
            $table->string('gambar_artikel');
            $table->enum('status_publish', ['Draft', 'Publish'])->default('Draft');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
};
