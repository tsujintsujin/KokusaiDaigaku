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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
             $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix_name')->nullable();
            $table->enum('gender', array('male', 'female'));
            $table->date('birthdate');
            $table->string('nationality');
            $table->string('contact_number');
            $table->string('address');
            $table->enum('employment_type', array('fulltime', 'parttime'));
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
        Schema::dropIfExists('teachers');
    }
};
