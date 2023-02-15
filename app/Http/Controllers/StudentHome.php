<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use App\Models\StudentSubject;
use Illuminate\Support\Facades\Auth;


class StudentHome extends Controller
{

    public $myData;
    public $mySubjects;
    public $allSubjects;


    public function student()
    {
        $this->myData = new Student();
        $this->allSubjects = Subject::class;

        $this->myData = Student::where('email', Auth::user()->email )->get();
        $this->mySubjects = StudentSubject::where('student_id', $this->myData->first()->id)->get();
 

        return view('dashboard.student_dashboard')
        ->with('Student', $this->myData)
        ->with('Subject', $this->allSubjects)
        ->with('StudentSubject', $this->mySubjects);
  
    }
}
