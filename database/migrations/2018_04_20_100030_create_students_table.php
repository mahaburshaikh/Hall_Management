<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('student_reg');
            $table->string('email');
            $table->string('address');
            $table->string('password');
            $table->string('mobile_no');
            $table->string('border_no');
            $table->string('image')->nullable();      
            $table->unsignedInteger('faculty_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('session_id');
            $table->foreign('faculty_id')->references('id')->on('faculties');        
            $table->foreign('room_id')->references('id')->on('rooms');        
            $table->foreign('session_id')->references('id')->on('sessions');        
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
        Schema::dropIfExists('students');
    }
}
