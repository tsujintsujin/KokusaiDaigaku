<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;

    protected $table = 'studentsubject';

    protected $fillable = [
        'student_id',
        'subject_id',
        'grade_id',
        'school_year_id'
    ];


    public function Grades()
    {
        return $this->hasMany(Grades::class);
    }
    public function Subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function Student()
    {
        return $this->hasMany(Grades::class);
    }
    public function SchoolYear()
    {
        return $this->hasMany(SchoolYear::class);
    }
}
