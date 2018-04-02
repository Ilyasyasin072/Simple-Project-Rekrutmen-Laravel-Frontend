<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('id_penerima');
            $table->string('id_testing');
            $table->datetime('tgl_penerima');
            $table->integer('pilih_lowongan');
            $table->integer('nilai_interview');
            $table->integer('nilai_psikotes');
            $table->integer('status');
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
        Schema::drop('penerimaans');
    }
}
