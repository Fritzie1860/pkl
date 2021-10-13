<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos6summaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos6summary', function (Blueprint $table) {
            $table->id('id_tos65', 5);
            $table->string('nama', 100);
            $table->double('beton',5);
            $table->double('besi',5);
            $table->double('bekisting',5);
            $table->double('lean',5);
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
        Schema::dropIfExists('tos6summary');
    }
}
