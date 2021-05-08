<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attendences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attendences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('year');
            $table->string('month');
            $table->string('date');
            $table->string('attendence');
            $table->integer('employee_id');
            $table->rememberToken();
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
        //
        Schema::dropIfExists('attendences');
    }
}
