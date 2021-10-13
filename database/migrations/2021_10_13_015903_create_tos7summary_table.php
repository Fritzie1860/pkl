<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos7summaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos7summary', function (Blueprint $table) {
            $table->id('id_tos77', 5);
            $table->string('nama',100);
            $table->double('beton',5);
            $table->double('besi',5);
            $table->double('bekisting',5);
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
        Schema::dropIfExists('tos7summary');
    }
}
