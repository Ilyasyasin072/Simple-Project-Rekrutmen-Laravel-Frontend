<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalamen', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahan');
            $table->string('posisi');
            $table->date('awal_masuk');
            $table->date('sampai');
            $table->string('bidang_pekerjaan');
            $table->integer('gaji_bulanan');
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
        Schema::drop('pengalamen');
    }
}
