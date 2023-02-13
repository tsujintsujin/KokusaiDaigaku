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
        Schema::create('student_subject', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('student_id');
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

                $table->unsignedBigInteger('subject_id');
                $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

                $table->unsignedBigInteger('grade_id');
                $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');

                $table->unsignedBigInteger('school_year_id');
                $table->foreign('school_year_id')->references('id')->on('schoolyear')->onDelete('cascade');
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
        Schema::dropIfExists('student_subject');
    }
};
