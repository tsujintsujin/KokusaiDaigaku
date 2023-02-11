<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveTeacher extends Model
{
    use HasFactory;
    protected $table = 'archive_teachers';

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
        'email',
        'address',
    ];
}
