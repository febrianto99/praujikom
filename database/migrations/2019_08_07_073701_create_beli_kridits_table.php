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
            $table->unsignedBigInteger('id_pembeli');
            $table->unsignedBigInteger('id_paket');
            $table->unsignedBigInteger('motor_id');
            $table->string('kridit_tanggal');
            $table->string('fotocopy_KTP');
            $table->string('fotocopy_KK');
            $table->string('fotocopy_slipgaji');

            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');
            $table->foreign('id_paket')->references('id')->on('kridit_pakets')->onDelete('cascade');
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
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
