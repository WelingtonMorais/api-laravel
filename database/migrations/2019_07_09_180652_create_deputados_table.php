<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeputadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deputados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_deputado')->unique();
            $table->string('nome',150);
            $table->string('partido',50);
            $table->bigInteger('MES1')->nullable();
            $table->bigInteger('MES2')->nullable();
            $table->bigInteger('MES3')->nullable();
            $table->bigInteger('MES4')->nullable();
            $table->bigInteger('MES5')->nullable();
            $table->bigInteger('MES6')->nullable();
            $table->bigInteger('MES7')->nullable();
            $table->bigInteger('MES8')->nullable();
            $table->bigInteger('MES9')->nullable();
            $table->bigInteger('MES10')->nullable();
            $table->bigInteger('MES11')->nullable();
            $table->bigInteger('MES12')->nullable();
            
        
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
        Schema::dropIfExists('deputados');
    }
}
