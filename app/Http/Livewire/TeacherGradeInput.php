<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYear;
use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Course;


class TeacherGradeInput extends Component
{
    public function render()
    {
        return view('livewire.teacher-grade-input')
        ->with('SchoolYear', SchoolYear::all())
        ->with('Course', Course::all())
        ->with('StudentSubject', StudentSubject::all())
        ->with('Subject', Subject::all());
    }
}
