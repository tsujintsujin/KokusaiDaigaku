<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseController extends Component
{

    public $window = "create";
    public $name;
    public $abbreviation;
    public $description;
    public $currentCourse = '1';


    public function create()
    {
        $this->window = "create";
        $course = new Course;
        $course->name = $this->name;
        $course->abbreviation = $this->abbreviation;
        $course->description = $this->description;
        $course->save();
        $this->reset('name', 'abbreviation', 'description');
    }

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
