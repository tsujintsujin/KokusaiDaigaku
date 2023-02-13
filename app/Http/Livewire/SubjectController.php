<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Subject;
use App\Models\StudentSubject;

class SubjectController extends Component
{
    public $currentCourse = '1';
    public $window = "create";
    public $course_id;
    public $subject_code;
    public $description;
    public $units;
    public $year_level = '1';
    // public $semester;


    public function mount(){
        $this->StudentSubject = StudentSubject::all();
        }

    protected function rules()
    {
        // mga condition sa input ng data sa creating subjects
        return [
            'course_id' => 'required',
            'subject_code' => 'required',
            // |unique:subjects,subject_code,NULL,id,year_level,' . $this->year_level,
            'year_level' => 'required',
            // 'semester' => 'required',
            'description' => 'required',
            'units' => 'required',
        ];
    }

    protected $messages = [
        // messages for every error of admin
        'course_id.required' => 'Select Course.',
        'subject_code.required' => 'Subject cannot be empty.',
        // 'subject_code.unique' => 'Subject already exist in thisyear level.',
        'year_level.required' => 'Select year level.',
        // 'semester' => 'Select semester',
        'description.required' => 'Description cannot be empty.',
        'units.required' => 'Select units.',
    ];
    public function courseErrorClear()
    {
        $this->resetValidation('course_id');
    }

    public function subjectErrorClear()
    {
        $this->resetValidation('subject_code');
    }
    public function yearLevelErrorClear()
    {
        $this->resetValidation('year_level');
    }
    // public function semesterErrorClear()
    // {
    //     $this->resetValidation('semester');
    // }
    public function descriptionErrorClear()
    {
        $this->resetValidation('description');
    }
    public function unitsErrorClear()
    {
        $this->resetValidation('units');
    }
    public function create()
    {   
        $this->validate();
        // $this->window = "create";
        // $Subject = new Subject;
        // $Subject->course_id = $this->course_id;
        // $Subject->subject_code = $this->subject_code;
        // $Subject->description = $this->description;
        // $Subject->units = $this->units;
        // $Subject->year_level = $this->year_level;
        // $Subject->save();

        Subject::create([
            'course_id' => $this->course_id,
            'subject_code' => $this->subject_code,
            'description' => $this->description,
            'units' => $this->units,
            'year_level' => $this->year_level,
        ]);
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
        ->with('Course', Course::all())
            ->with('StudentSubject', StudentSubject::all());
    }

}
