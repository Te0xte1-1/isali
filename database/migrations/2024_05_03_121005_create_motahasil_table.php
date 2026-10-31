<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('motahasil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mot_name');
            $table->string('mot_unit');
            $table->string('mot_id');
            $table->string('mot_barcode');
            $table->timestamps();
            
        });
    }


    public function down()
    {
        Schema::dropIfExists('motahasil');
    }
};
