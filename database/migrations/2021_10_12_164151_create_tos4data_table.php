<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos4dataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos4data', function (Blueprint $table) {
            $table->id('id_tos41', 5);
            $table->string('type', 100);
            $table->double('b', 5);
            $table->double('h', 5);
            $table->double('bd', 5);
            $table->double('diatul_utama', 5);
            $table->double('diatul_skg', 5);
            $table->double('diatul_pg', 5);
            $table->double('sengkang_dia_ka', 5);
            $table->double('sengkang_dia_tg', 5);
            $table->double('sengkang_dia_ki', 5);
            $table->double('peminggang_dia', 5);
            $table->double('peminggang_n', 5);
            $table->double('jumtulut_atas1', 5);
            $table->double('jumtulut_atas2', 5);
            $table->double('jumtulut_atas3', 5);
            $table->double('jumtulut_bawah1', 5);
            $table->double('jumtulut_bawah2', 5);
            $table->double('jumtulut_bawah3', 5);
            $table->double('jarakseng_dia_ka', 5);
            $table->double('jarakseng_dia_tg', 5);
            $table->double('jarakseng_dia_ki', 5);
            $table->double('l_sekur_beton', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos4data');
    }
}
