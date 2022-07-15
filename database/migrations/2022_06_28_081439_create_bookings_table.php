<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mesyuarat');
            $table->string('nama_urusetia');
            $table->integer('ic_urusetia');
            $table->date('tarikh_mula');
            $table->date('tarikh_akhir');
            $table->string('nama_pegawai');
            $table->integer('bil_pegawai_agensi');
            $table->integer('bil_pegawai_luar');
            $table->string('catatan');
            $table->integer('delete_id');
            $table->integer('flag');
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
        Schema::dropIfExists('bookings');
    }
};
