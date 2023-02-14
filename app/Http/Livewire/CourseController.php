<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\StudentSubject;


class CourseController extends Component
{
    public $StudentSubject;
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

    public function mount()
    {
        $this->StudentSubject = StudentSubject::all();
    }

    public $selectedCourse = NULL;
    public function updatingselectedCourse($course_id)
    {
        if (!is_null($course_id) && $course_id !== "") {
            $course_data = Course::where('id', $course_id)->first();
            $this->abbreviation = $course_data->abbreviation;
            $this->description = $course_data->description;
            $this->name = $course_data->name;
        }
    }
    public function update()
    {
        $this->validate();

        $course = Course::find($this->selectedCourse);
        $course->abbreviation =   $this->abbreviation;
        $course->description =  $this->description;
        $course->name = $this->name;
        $course->save();
        $this->resetElements();
    }

    public function resetElements()
    {
        $this->reset(
            'abbreviation',
            'selectedCourse',
            'description',
            'name',
        );
      
    }

    protected function rules()
    {
        // mga condition sa input ng data sa creating courses
        return [
            'name' => 'required',
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

    public function clearErrors()
    {
        $this->courseErrorClear();
        $this->abbreviationErrorClear();
        $this->descriptionErrorClear();
    }

    // this function is when admin clicked the cancel button when admin is in the edit form.




    // this function is when admin clicked the cancel button when admin is in the edit form.
    public function cancel()
    {
        $this->window = "create";
        $this->clearErrors();
    }

    public function edit()
    {
        $this->window = "edit";
        $this->clearErrors();

    }

    public function render()
    {
        return view('livewire.course-controller')
            ->with('Course', Course::all())
            ->with('StudentSubject', StudentSubject::all());
    }
}
