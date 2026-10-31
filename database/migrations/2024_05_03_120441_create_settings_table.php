<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comp_name');
            $table->string('comp_location');
            $table->string('comp_email');
            $table->string('comp_phone');
            $table->string('comp_pic');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
