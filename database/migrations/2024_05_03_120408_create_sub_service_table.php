<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  
    public function up()
    {
        Schema::create('sub_service', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('service_id')->constrained('services','id');
            $table->string('sub_name');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sub_service');
    }
};
