<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTos2pedestalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tos2pedestal', function (Blueprint $table) {
            $table->id('id_tos21', 5);
            $table->float('project_id',5);
            $table->string('tipe_kolom', 100);
            $table->double('tebal_plat', 5);
            $table->double('jum_kolom', 5);
            $table->string('footplat_type', 100);
            $table->double('pk_sengkang_qty', 5);
            $table->double('besi', 5);
            $table->double('beton', 5);
            $table->double('bekisting', 5);
            $table->double('rasio_b', 5);    
                     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tos2pedestal');
    }
}
