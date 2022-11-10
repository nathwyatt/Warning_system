<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stations_name');
            $table->integer('admins_id')->unsigned();
            $table->string('district');
            $table->timestamps();
            $table->foreign('admins_id')->references('id')->on('admins');
            
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('stations');
    }
};
