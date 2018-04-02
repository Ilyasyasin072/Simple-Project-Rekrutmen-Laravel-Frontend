<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_testing');
            $table->string('pelamar_no_ktp');
            $table->string('pelamar_nama');
            $table->string('pelamar_alamat');
            $table->dateTime('pelamar_ttl');
            $table->string('pelamar_jk');
            $table->string('pelamar_email')->unique();
            $table->string('pelamar_pendidikan');
            $table->string('pelamar_pengalamankerja');
            $table->integer('pelamar_tlp');
            $table->string('pelamar_status');
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
        Schema::drop('pelamars');
    }
}
