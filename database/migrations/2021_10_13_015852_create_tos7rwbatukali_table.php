<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos7rwbatukaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos7rwbatukali', function (Blueprint $table) {
            $table->id('id_tos76', 5);
            $table->string('nama',100);
            $table->double('b',5);
            $table->double('h',5);
            $table->double('l_alas',5);
            $table->double('p',5);
            $table->double('v',5);
            $table->double('galian',5);
            $table->double('pasir_urug',5);
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
        Schema::dropIfExists('tos7rwbatukali');
    }
}
