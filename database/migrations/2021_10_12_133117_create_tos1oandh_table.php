<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos1oandhTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos1oandh', function (Blueprint $table) {
            $table->id('id_tos11', 5);
            $table->float('project_id',5);
            $table->double('dia',5);
            $table->double('p',5);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos1oandh');
    }
}
