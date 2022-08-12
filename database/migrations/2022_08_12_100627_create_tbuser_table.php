<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbuser', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('nama',100);
            $table->string('username',30);
            $table->text('password');
            $table->unsignedBigInteger('id_outlet');
            $table->enum('role',['admin','kasir','owner']);

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
        Schema::dropIfExists('tbuser');
    }
}
