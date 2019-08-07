<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliKriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_kridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kridit_kode');
            $table->foreign('pembeli_no_KTP')->references('pembeli_no_KTP')->on('pembelis')->onDelete('cascade');
            $table->foreign('paket_kode')->references('paket_kode')->on('pembelis')->onDelete('cascade');
            $table->foreign('motor_kode')->references('motor_kode')->on('pembelis')->onDelete('cascade');            $table->date('kridit_tanggal');
            $table->boolean('fotocopy_KTP');
            $table->boolean('fotocopy_KK');
            $table->boolean('fotocopy_slipgaji');
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
        Schema::dropIfExists('beli_kridits');
    }
}
