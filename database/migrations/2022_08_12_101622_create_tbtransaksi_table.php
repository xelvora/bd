<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbtransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtransaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_outlet');
            $table->string('kode_invoice',100);
            $table->unsignedBigInteger('id_member');
            $table->dateTime('tanggal');
            $table->dateTime('batas_waktu');
            $table->dateTime('tanggaL_bayar');
            $table->unsignedBigInteger('biaya_tambahan');
            $table->double('diskon');
            $table->unsignedBigInteger('pajak');
            $table->enum('status',['baru','proses','selesai','diambil']);
            $table->enum('dibayar',['dibayar','belum_dibayar']);
            $table->unsignedBigInteger('id_user');
            
            $table->foreign('id_outlet')->references('id')->on('tboutlet');
            $table->foreign('id_member')->references('id')->on('tbmember');
            $table->foreign('id_user')->references('id')->on('tbuser');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbtransaksi');
    }
}
