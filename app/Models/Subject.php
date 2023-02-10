<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'course_id',
        'subject_code',
        'description',
        'units',
        'year_level',
        'semester'
    ];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
