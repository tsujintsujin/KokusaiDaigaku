<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Arr;


class AssignSubjectController extends Component
{
    public $schoolYear;
    public $studentList = [];
    public $subjectList = [];
    public $yearSelection =0;
    public $fromCourse =0;
    public $selectedCourse = NULL;
    public $selectedSection = NULL;
    public $subjectsSelected = [];
    public $studentsSelected = [];
    public $studentSearch;
    public $subjectSearch;

    public function mount(){
        $this->Section = Section::all();
        $this->Student = Student::all();
        $this->Subject = Subject::all();
        $this->Course = Course::all();
    }


    public function subjectAdd($id, $sub){
        if (isset($this->subjectsSelected[$id])) {
            unset($this->subjectsSelected[$id]);
        }else{
            $this->subjectsSelected[$id] = $sub;
        }
    }

    public function studentAdd($id, $name){
        if (isset($this->studentsSelected[$id])) {
            unset($this->studentsSelected[$id]);
        }else{
            $this->studentsSelected[$id] = $name;
        }
    
    }


    
    public function render()
       {
        return view('livewire.assign-subject-controller');
    }





    public function updatedSelectedCourse($course)
    {
        $this->selectedCourse = $course;
        $this->studentList = [];
        $this->subjectList = [];
        $this->selectedSection = 0;
    $this->studentSearch="";

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
        $this->subjectsSelected = [];
        $this->studentsSelected = [];
    }

   
    public function updatedSelectedSection($section)
    {
        $this->subjectList = [];
        $this->studentList = [];
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

        $this->subjectsSelected = [];
        $this->studentsSelected = [];
        $this->studentSearch="";

    }



public function updatedfromCourse($fromCourse){
    $this->subjectList = [];
    $this->subjectsSelected = [];
    if($this->fromCourse == 0 && $this->yearSelection == 0){
        $this->Subject = Subject::all();
    }else if($this->fromCourse!=0 && $this->yearSelection==0){
        $this->Subject = Subject::where('course_id', $this->fromCourse)->get();
    }else if($this->fromCourse==0 && $this->yearSelection!=0){
        $this->Subject = Subject::where('year_level', $this->yearSelection)->get();
    }else{
        $this->Subject = Subject::where(
            [['course_id', $this->fromCourse],
            ['year_level', $this->yearSelection]])->get();
    }
    $this->subjectSearch="";

}

public function updatedyearSelection($yearSelection){
    $this->subjectList = [];
    $this->subjectsSelected = [];
    if($this->yearSelection == 0 && $this->fromCourse == 0){
        $this->Subject = Subject::all();
    }else if($this->yearSelection!=0 && $this->fromCourse==0){
        $this->Subject = Subject::where('year_level', $this->yearSelection)->get();
    }else if($this->yearSelection==0 && $this->fromCourse!=0){
        $this->Subject = Subject::where('course_id', $this->fromCourse)->get();
    }else{
        $this->Subject = Subject::where(
            [['course_id', $this->fromCourse],
            ['year_level', $this->yearSelection]])->get();
    }
    $this->subjectSearch="";
}



public function updatedstudentSearch(){
    // $this->studentSearch = $studentSearch;
    // $this->Student = Student::where('first_name', 'LIKE', '"%'.$this->studentSearch.'%"')->orWhere('middle_name', 'LIKE', '%'.$this->studentSearch.'%')->orWhere('last_name', 'LIKE', '%'.$this->studentSearch.'%')->get();
    $this->Student = Student::where('first_name', 'LIKE', "%$this->studentSearch%")->orWhere('last_name', 'LIKE', "%$this->studentSearch%")->orWhere('middle_name', 'LIKE', "%$this->studentSearch%")->get();
    $this->studentsSelected = [];
    $this->selectedCourse = 0;
    $this->yearSelection = 0;
    $this->studentList = 0;
    $this->fromCourse = 0;
    $this->Subject = Subject::all();

}


public function updatedsubjectSearch(){
    $this->Subject = Subject::where('subject_code', 'LIKE', "%$this->subjectSearch%")->orWhere('description', 'LIKE', "%$this->subjectSearch%")->get();
    $this->yearSelection = 0;
    $this->fromCourse = 0;
    $this->selectedCourse = 0;
    $this->yearSelection = 0;
    $this->subjectList = [];
    $this->subjectsSelected = [];

}



    public function showCont(){
        dump($this->subjectsSelected, $this->studentsSelected, );
    }
}


