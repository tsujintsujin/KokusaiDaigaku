<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        return view('livewire.student-management');
    }
}
