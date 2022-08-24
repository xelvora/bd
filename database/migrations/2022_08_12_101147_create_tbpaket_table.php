<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpaket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_outlet');
            $table->enum('jenis',['kiloan','selimut','bed_cover','kaos','lain']);
            $table->string('nama_paket',100);
            $table->integer('harga');
            
            $table->foreign('id_outlet')->references('id')->on('tboutlet');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpaket');
    }
}
