<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('border_no');
            $table->unsignedInteger('level');
            $table->unsignedInteger('semester');
            $table->string('session');
            $table->string('student_name');
            $table->string('duration');
            $table->unsignedInteger('year');
            $table->unsignedInteger('amount');
            $table->unsignedInteger('due')->default(0);
            $table->boolean('status')->nullable();
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('payments');
    }
}
