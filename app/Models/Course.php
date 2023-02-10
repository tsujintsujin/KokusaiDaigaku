<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'description',
        'abbreviation'
    ];

    public function Subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function Section()
    {
        return $this->hasMany(Section::class);
    }
    public function Student()
    {
        return $this->hasMany(Student::class);
    }
}
