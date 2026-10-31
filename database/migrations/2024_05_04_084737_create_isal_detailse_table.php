<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
  
    public function up()
    {
        Schema::create('isal_detailse', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->foreignId('isal_id')->constrained('isals','id');
            $table->foreignId('service_id')->constrained('services','id');
            $table->decimal('service_price',10,2);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('isal_detailse');
    }
};
