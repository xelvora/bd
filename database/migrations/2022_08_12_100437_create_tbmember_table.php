<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmember', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('nama',100);
            $table->text('alamat');
            $table->enum('jeniskelamin',['L','P']);
            $table->string('tlp',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbmember');
    }
}
