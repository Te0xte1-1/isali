<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  
    public function up()
    {
        Schema::create('isals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isal_serial');
            $table->string('isal_customer_name');
            $table->string('isal_customer_national');
            $table->string('isal_customer_phone');
            $table->integer('isal_pay_type');
            $table->foreignId('isal_status')->constrained('isal_status','id');
            $table->decimal('isal_total', 10,2);
            $table->tinyInteger('isal_approve');
            $table->date('isal_date');
            $table->time('isal_time');
            $table->string('currentMonth');
            $table->string('currentYear');
            $table->string('created_by');
            $table->string('isal_note_comment');
            $table->string('isal_print_comment');
            $table->timestamps();  
        });

      }


    public function down()
    {
        Schema::dropIfExists('isals');
    }
};
