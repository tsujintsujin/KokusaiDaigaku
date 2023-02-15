<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYear;
use App\Models\Subject;
use App\Models\Student;
use App\Models\StudentSubject;
use Illuminate\Support\Facades\Auth;


class StudentGradeviewer extends Component
{
    
    public $myData;
    public $mySubjects;
    public $allSubjects;
    public $selectSchoolYear=1;
    public $overallAverage;
    public $subjectCount;
    public $noFinals = "No final grade yet.";

    public function updatedselectSchoolYear(){
        $this->overallAverage = 0;
        $this->subjectCount = 0;

        $this->mySubjects = StudentSubject::where('student_id', $this->myData->first()->id)->where('school_year_id',$this->selectSchoolYear)->get();

        if(count($this->mySubjects)>0){
            foreach( $this->mySubjects as $mySubject){
                $this->overallAverage += $mySubject->final;
                $this->subjectCount++;
            }
            if($this->subjectCount>0 && $mySubject->final!=0){
                $this->overallAverage = $this->overallAverage / $this->subjectCount;
            }
        }else{
            $this->overallAverage = $this->noFinals;
        }
    }


    public function mount(){
        $this->myData = new Student();
        $this->allSubjects = Subject::class;
        
       
        $this->myData = Student::where('email', Auth::user()->email )->get();
        $this->mySubjects = StudentSubject::where('student_id', $this->myData->first()->id)->where('school_year_id',1)->get();


        foreach( $this->mySubjects as $mySubject){
            $this->overallAverage += $mySubject->final;
            $this->subjectCount++;
        }

        if($this->subjectCount>0 && $mySubject->final!=0){
            $this->overallAverage = $this->overallAverage / $this->subjectCount;
        }else{
            $this->overallAverage = $this->noFinals;
        }
        
    }

    public function render()
    {
        return view('livewire.student-gradeviewer')->with('finalsAverage', $this->overallAverage)
        ->with('Student', $this->myData)
        ->with('Subject', $this->allSubjects)
        ->with('StudentSubject', $this->mySubjects)
        ->with('SchoolYear',SchoolYear::all());
    }
}
