<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos7VRWBatuKaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos7vrwbatu_kali', function (Blueprint $table) {
            $table->id('id_tos79', 5);
            $table->string('nama',100);
            $table->double('batukali',5);
            $table->double('galian',5);
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
        Schema::dropIfExists('tos7_v_r_w_batu_kali');
    }
}
