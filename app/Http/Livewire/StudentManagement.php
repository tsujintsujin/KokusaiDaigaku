<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
class StudentManagement extends Component
{
    public $window = "create";
    
    public function create()
    {
        $this->window = "create";
    }
    
    public function edit()
    {
        $this->window = "edit";
    }
    
    public function render()
    {
        return view('livewire.student-management')
        ->with('courses', Course::latest()->get());
    }
}
