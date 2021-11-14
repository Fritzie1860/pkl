<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos3groundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos3ground', function (Blueprint $table) {
            $table->id('id_tos32', 5);
            $table->string('tipe_kolom', 100);
            $table->double('tebal_plat', 5);
            $table->double('jum_kolom', 5);
            $table->string('footplat_type', 100);
            $table->double('pk_sengkang_qty', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos3ground');
    }
}
