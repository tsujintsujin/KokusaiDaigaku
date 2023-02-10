<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'course_id',
        'section_id',
        'last_name',
        'first_name',
        'middle_name',
        'suffix_name',
        'gender',
        'birthdate',
        'nationality',
        'contact_number',
        'address',
        'email'
    ];
    // $table->string('last_name');
    // $table->string('first_name');
    // $table->string('middle_name');
    // $table->string('suffix_name')->nullable();
    // $table->enum('gender', array('male', 'female'));
    // $table->date('birthdate');
    // $table->string('nationality');
    // $table->integer('contact_number');
    // $table->string('address');
    // $table->string('password');



    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

}
