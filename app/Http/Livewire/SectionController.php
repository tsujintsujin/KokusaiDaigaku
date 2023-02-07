<?php

namespace App\Http\Livewire;

use App\Models\Section;
use App\Models\Course;
use Livewire\Component;

class SectionController extends Component
{
    public $window = "create";
    public $name;
    public $course_id;
    public $description;

    // adding a data in section table
    public function create()
    {
        $this->window = "create";
        $section = new Section;
        $section->name = $this->name;
        $section->course_id = $this->course_id;
        $section->description = $this->description;
        $section->save();
        $this->reset('name', 'course_id', 'description');
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
    public $selectedCourse = NULL;
    public $sections;
    public $courses;
    public function mount()
    {
        $this->courses = Course::all();
        $this->sections = collect();
    }
    public function updatedSelectedCourse($course)
    {
        if (!is_null($course)) {
            $this->sections = Section::where('course_id', $course)->get();
        }
    }

    public function render()
    {
        return view('livewire.section-controller')->with('courses', Course::latest()->get());
    }
}
