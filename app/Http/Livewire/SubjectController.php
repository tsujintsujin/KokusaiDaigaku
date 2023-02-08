<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Subject;
class SubjectController extends Component
{

    public $window = "create";
    public $course_id;
    public $subject_code;
    public $description;
    public $units;
    public $year_level;
    public function create()
    {
        $this->window = "create";
        $Subject = new Subject;
        $Subject->course_id = $this->course_id;
        $Subject->subject_code = $this->subject_code;
        $Subject->description = $this->description;
        $Subject->units = $this->units;
        $Subject->year_level = $this->year_level;
        $Subject->save();
        $this->reset('course_id', 'subject_code','description','units','year_level');

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
        return view('livewire.subject-controller')
        ->with('courses', Course::latest()->get());
    }

}
