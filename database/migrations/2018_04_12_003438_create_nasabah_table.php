<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('no_rekening');
            $table->string('nama_nasabah');
            $table->string('kategori_nasabah');
            $table->string('nama_banksampah');
            $table->string('no_ktp');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('wilayah');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('pekerjaan');
            $table->string('program_simpanan');
            $table->string('cara_setor');
            $table->string('waktu_setor');
            $table->string('hari_setor');
            $table->string('jam_setor');
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
        Schema::dropIfExists('nasabah');
    }
}
