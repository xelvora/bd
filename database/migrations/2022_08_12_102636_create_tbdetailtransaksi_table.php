<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbdetailtransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbdetailtransaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_paket');
            $table->double('qty');
            $table->text('keterangan');
            
            $table->foreign('id_transaksi')->references('id')->on('tbtransaksi');
            $table->foreign('id_paket')->references('id')->on('tbpaket');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbdetailtransaksi');
    }
}
