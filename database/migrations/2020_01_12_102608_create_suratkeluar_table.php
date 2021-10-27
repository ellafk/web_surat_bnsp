<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat')->unique();
            $table->string('tujuan_surat')->nullable();
            $table->string('isi')->nullable();
            $table->string('kode')->nullable();
            $table->date('tgl_surat')->nullable();
            $table->date('tgl_catat')->nullable();
            $table->string('filekeluar')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('suratkeluar');
    }
}
