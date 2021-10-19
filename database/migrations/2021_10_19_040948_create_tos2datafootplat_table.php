<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos2datafootplatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos2datafootplat', function (Blueprint $table) {
            $table->id('id_tos25', 5);
            $table->string('nama',100);
            $table->double('b',5);
            $table->double('h',5);
            $table->double('t',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos2datafootplat');
    }
}
