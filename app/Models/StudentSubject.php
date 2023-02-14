<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;

    protected $table = 'student_subjects';
    protected $fillable = [
        'student_id',
        'subject_id',
        'school_year_id'
    ];


    public function Subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function Student()
    {
        return $this->hasMany(Student::class);
    }

    public function SchoolYear()
    {
        return $this->hasMany(SchoolYear::class);
    }
}
