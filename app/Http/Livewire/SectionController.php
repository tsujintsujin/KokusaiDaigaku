<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\Course;
use App\Models\Student;

class SectionController extends Component
{
    public $window = "create";
    public $name;
    public $course_id;
    public $selectedCourse;
    public $selectedSection;



    protected function rules()
    {
        // mga condition sa input ng data sa creating sections
        return [
            'name' => 'required|unique:sections,name,NULL,id,course_id,' . $this->course_id,
            'course_id' => 'required',
        ];
    }
    protected $messages = [
        // messages for every error of admin
        'name.required' => 'Section name cannot be empty.',
        'name.unique' => 'Section already exist.',
        'course_id.required' => 'Course cannot be empty.',
    ];
    public function courseErrorClear()
    {
        $this->resetValidation('course_id');
    }
    public function sectionErrorClear()
    {
        $this->resetValidation('name');
    }

    // adding a data in section table
    public function create()
    {
        $this->validate();
        // $this->window = "create";
        // $section = new Section;
        // $section->name = $this->name;
        // $section->course_id = $this->course_id;
        // $section->description = $this->description;
        // $section->save();
        // $this->reset('name', 'course_id', 'description');

        Section::create([
            'name' => $this->name,
            'course_id' => $this->course_id,
        ]);
        $this->reset('name', 'course_id');
    }

    // this function is when admin clicked the cancel button when admin is in the edit form.
    public function create_tab()
    {
        $this->window = "create";
      
    }

    public function edit()
    {
        $this->window = "edit";
    }

 
    // this is for dropdown selected course.

   
    public function updatedSelectedCourse($course)
    {
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
























    public function render()
    {
        return view('livewire.section-controller')
        ->with('Course', Course::all())
        ->with('Student', Student::all())
        ->with('Section', Section::all());
    }
}
