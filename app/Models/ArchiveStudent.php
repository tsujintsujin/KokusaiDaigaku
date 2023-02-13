<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveStudent extends Model
{
    use HasFactory;

    protected $table = 'archive_students';

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
}
