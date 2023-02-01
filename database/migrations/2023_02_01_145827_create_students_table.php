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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix_name')->nullable();
            $table->enum('gender', array('male', 'female'));
            $table->date('birthdate');
            $table->string('nationality');
            $table->integer('contact_number');
            $table->string('address');
            $table->unsignedBigInteger('course_name');
            $table->foreign('course_name')->references('name')->on('courses')->onDelete('cascade');
           
            // $table->Hash::make($value)
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
};
