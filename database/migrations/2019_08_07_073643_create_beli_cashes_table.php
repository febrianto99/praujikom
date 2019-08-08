<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_code');
            $table->unsignedBigInteger('id_pembeli');
            $table->unsignedBigInteger('motor_id');
            $table->string('cash_tanggal');
            $table->string('cash_bayar');

            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');
            $table->foreign('motor_id')->references('id')->on('pembelis')->onDelete('cascade');
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
        Schema::dropIfExists('beli_cashes');
    }
}
