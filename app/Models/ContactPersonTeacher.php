<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPersonTeacher extends Model
{
    use HasFactory;
    protected $table = 'contact_people_teachers';
    protected $fillable = [
        'relationship',
        'teacher_id',
        'contact_person_id'
    ];
}
