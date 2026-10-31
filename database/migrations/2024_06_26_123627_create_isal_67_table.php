<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isal_67', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('isal_id')->constrained('isals','id');	
            $table->decimal('isal_total',10,2);	
            $table->string('isal_serial','255');	

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
        Schema::dropIfExists('isal_67');
    }
};
