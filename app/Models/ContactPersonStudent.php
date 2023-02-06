<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPersonStudent extends Model
{
    use HasFactory;
    protected $table = 'contact_people_students';
    protected $fillable = [
        'relationship',
        'student_id',
        'contact_person_id'
    ];
}
