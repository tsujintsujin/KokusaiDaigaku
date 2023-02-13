<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Support\Arr;


class AssignSubjectController extends Component
{


    public $selectedCourse = NULL;
    public $selectedSection = NULL;
    public $fromCourse = "";
    public $subjectsSelected;
    public $counter = 0;

    public function mount(){
        $this->Section = Section::all();
        $this->Student = Student::all();
    }


    public function render()
    {

     
        return view('livewire.assign-subject-controller')
        ->with('Course', Course::all())
        ->with('Section', Section::all())
        ->with('Student', Student::all());
    }


    public function updatedSelectedCourse($course)
    {
        $this->selectedCourse = $course;
        $this->selectedSection = 0;
        if ($course == 0 && $this->selectedSection == 0) {
            $this->Section = Section::all();
            $this->Student = Student::all();
        }else if($course == 0 && $this->selectedSection != 0){
            $this->Section = Section::where('course_id', $this->selectedCourse)->get();
            $this->Student = Student::where('section_id', $this->selectedSection)->get();
        }else if($course != 0 && $this->selectedSection != 0){    
            $this->Section = Section::where('course_id', $this->selectedCourse)->get();
            $this->Student = Student::where(
                [['course_id', $this->selectedCourse],
                ['section_id', $this->selectedSection]])->get();
        }else{
            $this->Section = Section::where('course_id', $this->selectedCourse)->get();
            $this->Student = Student::where('course_id', $this->selectedCourse)->get();
        }



        if($course==0){
            $this->selectedSection = 0;
            $this->Section = Section::all();
            $this->Student = Student::all();
        }

        $this->fromCourse = $course;
        
    }



   

    public function updatedSelectedSection($section)
    {
        $this->selectedSection = $section;

        if ($section == 0 && $this->selectedCourse == 0) {
            $this->Student = Student::all();
        }else if($section == 0 && $this->selectedCourse != 0) {
            $this->Student = Student::where('course_id', $this->selectedCourse)->get();
        }else if($section != 0 && $this->selectedCourse != 0) {
           $this->Student = Student::where(
                [['course_id', $this->selectedCourse],
                ['section_id', $this->selectedSection]])->get();
        }else{
            $this->Student = Student::where('section_id', $this->selectedSection)->get();
        }
    }
}
