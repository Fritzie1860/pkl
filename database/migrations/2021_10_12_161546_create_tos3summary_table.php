<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos3summaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos3summary', function (Blueprint $table) {
            $table->id('id_tos34', 5);
            $table->string('nama', 100);
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
        Schema::dropIfExists('tos3summary');
    }
}
