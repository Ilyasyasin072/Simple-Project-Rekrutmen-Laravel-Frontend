<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan');
            $table->string('jenis');
            $table->dateTime('tanggal_berdiri');
            $table->integer('no_telepon');
            $table->string('email')->unique();
            $table->text('alamat');
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
        Schema::drop('perusahaans');
    }
}
