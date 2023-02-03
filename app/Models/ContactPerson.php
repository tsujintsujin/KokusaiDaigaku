<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;
    protected $table = 'contact_people';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'suffix_name',
        'gender',
        'nationality',
        'contact_number',
        'address',
    ];
}
