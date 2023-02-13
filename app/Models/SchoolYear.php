<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;

    protected $table = 'schoolyear';

    protected $fillable = [
        'school_year',
        'semester'
    ];
    

    public function StudentSubject()
    {
        return $this->hasMany(StudentSubject::class);
    }
    
}
