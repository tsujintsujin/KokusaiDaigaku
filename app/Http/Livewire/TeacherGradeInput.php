<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYear;
use App\Models\StudentSubject;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class TeacherGradeInput extends Component
{
    public $classStudents;
    public $classSubjects;
    public $selectedCourse;
    public $selectedSubject;




    public function updatedselectedSubject(){
       
        $this->classStudents = StudentSubject::where('subject_id',$this->selectedSubject)->get();
    }



    public function render()
    {
        return view('livewire.teacher-grade-input')
        ->with('SchoolYear', SchoolYear::all())
        ->with('Course', Course::all())
        ->with('Student', Student::all())
        ->with('StudentSubject', StudentSubject::all())
        ->with('Subject', Subject::all());
    }

}
