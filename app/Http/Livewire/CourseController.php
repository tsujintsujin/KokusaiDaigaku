<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseController extends Component
{

    public $window = "create";
    public $currentCourse = '1';
    public $name;
    public $abbreviation;
    public $description;
    public $name_null = NULL;
    protected $rules = [
        'name' => 'required',
        'abbreviation' => 'required',
        'description' => 'required'
    ];
    protected function rules()
    {
        // mga condition sa input ng data sa creating courses
        return [
            'name' => 'required|unique:courses,name,NULL,id,name,' . $this->name,
            'abbreviation' => 'required',
            'description' => 'required'
        ];
    }
    protected $messages = [
        // messages for every error of admin
        'name.required' => 'Course name cannot be empty.',
        'name.unique' => 'Course already exist.',
        'abbreviation.required' => 'Abbreviation cannot be empty.',
        'description.required' => 'Description cannot be empty.',
    ];

    public function create()
    {
        $this->validate();
        // if (is_null($this->name)) {
        //     $this->name_null = "Course Name Error";
        //     // dump($this->name_null);
        // } else {
        //     $this->window = "create";
        //     $course = new Course;
        //     $course->name = $this->name;
        //     $course->abbreviation = $this->abbreviation;
        //     $course->description = $this->description;
        //     $course->save();
        //     $this->reset('name', 'abbreviation', 'description');
        // }

        Course::create([
            'name' => $this->name,
            'abbreviation' => $this->abbreviation,
            'description' => $this->description,
        ]);
        $this->reset('name', 'abbreviation', 'description');
    }
    public function courseErrorClear()
    {
        $this->resetValidation('name');
    }

    public function abbreviationErrorClear()
    {
        $this->resetValidation('abbreviation');
    }
    public function descriptionErrorClear()
    {
        $this->resetValidation('description');
    }

    // this function is when admin clicked the cancel button when admin is in the edit form.

  


    // this function is when admin clicked the cancel button when admin is in the edit form.
    public function cancel()
    {
        $this->window = "create";
    }

    public function edit()
    {
        $this->window = "edit";
    }

    public function render()
    {
        return view('livewire.course-controller')
            ->with('Course', Course::all());
    }
}
