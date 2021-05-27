<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationPendudukBa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relasi_pdk_ba', function (Blueprint $table) {
            $table->id();
            $table->integer('pdk_id');  //penduduk id, bukan nik
            $table->integer('ba_id');   //berita acara id
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
        Schema::dropIfExists('relation_penduduk_ba');
    }
}
