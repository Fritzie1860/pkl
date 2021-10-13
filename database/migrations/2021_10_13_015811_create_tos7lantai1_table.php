<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos7lantai1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos7lantai1', function (Blueprint $table) {
            $table->id('id_tos74', 5);
            $table->string('type', 100);
            $table->double('d_t',5);
            $table->double('d_p',5);
            $table->double('d_tebal',5);
            $table->double('beton',5);
            $table->double('bekisting',5);
            $table->string('trw_uraian',5);
            $table->double('trw_uk',5);
            $table->double('trw_dia',5);
            $table->double('trw_jarak',5);
            $table->double('trw_kait',5);
            $table->double('trw_ol',5);
            $table->double('trw_is',5);
            $table->double('trw_p',5);
            $table->double('trw_btg',5);
            $table->double('trw_ptotal',5);
            $table->double('trw_bj',5);
            $table->double('trw_nos',5);
            $table->double('trw_tberat',5);
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
        Schema::dropIfExists('tos7lantai1');
    }
}
