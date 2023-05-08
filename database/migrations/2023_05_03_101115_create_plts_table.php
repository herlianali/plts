<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('system_plts', ['on_grid', 'off_grid']);
            $table->string('daya_pln');
            $table->bigInteger('golongan_tarif_kode')->unsigned();
            $table->string('tagihan_pln_bulan');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('golongan_tarif_kode')->references('kode')->on('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plts', function(Blueprint $table) {
            $table->dropForeign(['golongan_tarif_kode']);
            $table->dropColumn('golongan_tarif_kode');
        });
    }
}
