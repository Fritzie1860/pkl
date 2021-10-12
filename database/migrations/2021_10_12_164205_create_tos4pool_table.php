<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos4poolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos4pool', function (Blueprint $table) {
            $table->id('id_tos42', 5);
            $table->string('as',100);
            $table->char('kosong',1);
            $table->string('as2',100);
            $table->double('nos_bh',5);
            $table->string('code_pos',100);
            $table->string('code_type',100);
            $table->double('pbalok_pkotor',5);
            $table->double('pbalok_pengaruhkol_kiri',5);
            $table->double('pbalok_pengaruhkol_kanan',5);
            $table->double('pbalok_pbersih',5);
            $table->double('tebal_plat',5);
            $table->double('dtb_b',5);
            $table->double('dtb_h',5);
            $table->double('luas_sekur_beton',5);
            $table->double('dbeton',5);
            $table->double('tulut_jumtul_atas_kiri',5);
            $table->double('tulut_jumtul_atas_tgh',5);
            $table->double('tulut_jumtul_atas_kanan',5);
            $table->double('tulut_jumtul_bawah_kiri',5);
            $table->double('tulut_jumtul_bawah_tgh',5);
            $table->double('tulut_jumtul_bawah_kanan',5);
            $table->double('tulut_dia',5);
            $table->double('tulseng_diaseng_skkiri',5);
            $table->double('tulseng_diaseng_sktgh',5);
            $table->double('tulseng_diaseng_skknn',5);
            $table->double('tulseng_jarak_kiri',5);
            $table->double('tulseng_jarak_tgh',5);
            $table->double('tulseng_jarak_knn',5);
            $table->double('peminggang_dia',5);
            $table->double('peminggang_n',5);
            $table->double('tulut_p',5);
            $table->double('tulut_atas',5);
            $table->double('tulut_bawah',5);
            $table->double('tulut_berat',5);
            $table->double('tulseng_kiri_p',5);
            $table->double('tulseng_kiri_p2',5);
            $table->double('tulseng_kiri_jarak',5);
            $table->double('tulseng_kiri_n',5);
            $table->double('tulseng_tgh_p',5);
            $table->double('tulseng_tgh_p2',5);
            $table->double('tulseng_tgh_jarak',5);
            $table->double('tulseng_tgh_n',5);
            $table->double('tulseng_knn_p',5);
            $table->double('tulseng_knn_p2',5);
            $table->double('tulseng_knn_jarak',5);
            $table->double('tulseng_knn_n',5);
            $table->double('tulseng_berat',5);
            $table->double('tulpem_p',5);
            $table->double('tulpem_n',5);
            $table->double('tulpem_berat',5);
            $table->double('besi_utama',5);
            $table->double('besi_add',5);
            $table->double('besi_total',5);
            $table->double('rasio_besi',5);
            $table->double('v_beton',5);
            $table->double('v_besi',5);
            $table->double('v_bb',5);
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
        Schema::dropIfExists('tos4pool');
    }
}
