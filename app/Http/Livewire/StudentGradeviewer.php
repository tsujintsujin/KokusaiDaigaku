<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYear;
use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentSubject;

class StudentGradeviewer extends Component
{
    




    public function render()
    {
        return view('livewire.student-gradeviewer')
        ->with('SchoolYear', SchoolYear::all())
        ->with('StudentSubject', StudentSubject::all())
        ->with('Subject', Subject::all());
    }
}
