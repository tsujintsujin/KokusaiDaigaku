<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;


use Carbon\Carbon;

class AdminHome extends Controller
{
    public function admin()
    {
        $date = Carbon::now();

        return view('dashboard.admin_dashboard')
        ->with('Course', Course::all())
        ->with('Student', Student::all())
        ->with('Teacher', Teacher::all())
        ->with('date', $date);
    }
}
