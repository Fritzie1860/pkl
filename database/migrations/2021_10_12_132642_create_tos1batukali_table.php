<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos1batukaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos1batukali', function (Blueprint $table) {
            $table->id('id_tos14', 5);
            $table->string('nama',100);
            $table->string('bentuk',100);
            $table->double('b',5);
            $table->double('b_',5);
            $table->double('h',5);
            $table->double('p',5);
            $table->double('la',5);
            $table->double('v_bk',5);
            $table->double('pasir_u',5);
            $table->double('galian',5);
            $table->double('timbunan',5);
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
        Schema::dropIfExists('tos1batukali');
    }
}
