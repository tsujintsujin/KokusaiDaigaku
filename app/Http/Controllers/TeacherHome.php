<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use App\Models\StudentSubject;
use App\Models\SchoolYear;
use Illuminate\Support\Facades\Auth;


class TeacherHome extends Controller
{

   

    public function teacher()
    {
        
    return view('dashboard.teacher_dashboard')
    ->with('SchoolYear', SchoolYear::all())
    ->with('Course', Course::all())
    ->with('StudentSubject', StudentSubject::all())
    ->with('Subject', Subject::all());
  
    }
}
