<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos3dataTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos3data', function (Blueprint $table) {
            $table->id('id_tos31', 5);
            $table->float('project_id',5);
            $table->string('nama', 100);
            $table->string('bentuk', 100);
            $table->double('dimensi_l',5);
            $table->double('dimensi_p',5);
            $table->double('tebal_selimut',5);
            $table->double('tulpok_dia',5);
            $table->double('tulpok_jum',5);
            $table->double('tulseng_dia_tumpuan',5);
            $table->double('tulseng_dia_lapangan',5);
            $table->double('tulseng_dia_jaraklap',5);
            $table->double('tulseng_dia_jaraktump',5);
            $table->double('thtump_dia',5);
            $table->double('thtump_jarak',5);
            $table->double('thlap_dia',5);
            $table->double('thlap_jarak',5);
            $table->double('tvtump_dia',5);
            $table->double('tvtump_jarak',5);
            $table->double('tvlap_dia',5);
            $table->double('tvlap_jarak',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos3data');
    }
}
