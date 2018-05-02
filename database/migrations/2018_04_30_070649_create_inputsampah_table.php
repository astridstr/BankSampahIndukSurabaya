<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputsampah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_rekening');
            $table->json('id_sampah');
            $table->json('kuantitas');
            $table->json('harga');
            $table->json('amount');
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
        Schema::dropIfExists('inputsampah');
    }
}
