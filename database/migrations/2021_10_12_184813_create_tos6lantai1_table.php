<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos6lantai1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos6lantai1', function (Blueprint $table) {
            $table->id('id_tos62', 5);
            $table->string('type', 100);
            $table->double('d_lh', 5);
            $table->double('d_lv',5);
            $table->double('d_tebal',5);
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
            $table->double('v_besi',5);
            $table->double('v_beton',5);
            $table->double('ratio_besi',5);
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
        Schema::dropIfExists('tos6lantai1');
    }
}
