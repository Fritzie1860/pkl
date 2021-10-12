<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos2pedestalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos2pedestal', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kolom',100);
            $table->string('bentuk_kolom',100);
            $table->double('dk_t',5);
            $table->double('dk_l',5);
            $table->double('dk_p',5);
            $table->double('tebal_plat',5);
            $table->double('tinggi_net',5);
            $table->double('selimut_beton',5);
            $table->double('jum_kolom',5);
            $table->string('footplat_type',100);
            $table->double('footplat_b',5);
            $table->double('footplat_h',5);
            $table->double('footplat_p',5);
            $table->double('pk_ket',5);
            $table->double('pk_tulpok_dia',5);
            $table->double('pk_tulpok_qty',5);
            $table->double('pk_sengkang_dia',5);
            $table->double('pk_sengkang_qty',5);
            $table->double('pk_sengkang_jarak',5);
            $table->double('pk_tulanganpokok_ovlp',5);
            $table->double('pk_tulanganpokok_suk',5);
            $table->double('pk_tulanganpokok_kkf',5);
            $table->double('pk_tulanganpokok_p_besi',5);
            $table->double('pk_tulanganpokok_total_p',5);
            $table->double('pk_tulanganpokok_berat',5);
            $table->double('pk_sengkang2_tekukan_id',5);
            $table->double('pk_sengkang2_tekukan_p',5);
            $table->double('pk_sengkang2_qty',5);
            $table->double('pk_sengkang2_total_p',5);
            $table->double('pk_sengkang2_berat',5);
            $table->double('besi',5);
            $table->double('beton',5);
            $table->double('bekisting',5);
            $table->double('rasio_besi',5);
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
        Schema::dropIfExists('tos2pedestal');
    }
}
