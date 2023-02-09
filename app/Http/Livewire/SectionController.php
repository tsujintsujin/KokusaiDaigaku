<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\Course;
class SectionController extends Component
{
    public $window = "create";
    public $name;
    public $course_id;

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
