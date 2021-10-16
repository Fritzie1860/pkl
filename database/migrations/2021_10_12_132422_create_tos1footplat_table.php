<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos1footplatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos1footplat', function (Blueprint $table) {
            $table->id('id_tos13', 5);
            $table->string('type',100);
            $table->double('dfp_l',5);
            $table->double('dfp_p',5);
            $table->double('dfp_t',5);
            $table->double('level_mta',5);
            $table->double('jumlah',5);
            $table->double('tav_dia',5);
            $table->double('tav_jarak',5);
            $table->double('tav_p',5);
            $table->double('tav_add',5);
            $table->double('tav_jum',5);
            $table->double('tav_bjenis',5);
            $table->double('tav_total',5);
            $table->double('tbv_dia',5);
            $table->double('tbv_jarak',5);
            $table->double('tbv_p',5);
            $table->double('tbv_add',5);
            $table->double('tbv_jum',5);
            $table->double('tbv_bjenis',5);
            $table->double('tbv_total',5);
            $table->double('tah_dia',5);
            $table->double('tah_jarak',5);
            $table->double('tah_p',5);
            $table->double('tah_add',5);
            $table->double('tah_jum',5);
            $table->double('tah_bjenis',5);
            $table->double('tah_total',5);
            $table->double('tbh_dia',5);
            $table->double('tbh_jarak',5);
            $table->double('tbh_p',5);
            $table->double('tbh_add',5);
            $table->double('tbh_jum',5);
            $table->double('tbh_bjenis',5);
            $table->double('tbh_total',5);
            $table->double('tp_dia',5);
            $table->double('tp_jum',5);
            $table->double('tp_p',5);
            $table->double('tp_total',5);
            $table->double('v_besi',5);
            $table->double('v_beton',5);
            $table->double('v_bb',5);
            $table->double('v_galian',5);
            $table->double('v_lc',5);
            $table->double('v_pasir',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos1footplat');
    }
}
