<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class PreEnrolledStudentsController extends Component
{

    public $studentLastName;
    public $studentFirstName;
    public $studentMiddleName;
    public $studentSuffixName;
    public $studentGender;
    public $studentBirthdate;
    public $studentNationality;
    public $studentContactNumber = '09093545643';
    public $studentEmail;
    public $studentAddress;
    public $studentCourse;
 
    public $selectedStudent = NULL;
    public function viewStudentSelected()
    {
        dump($this->selectedStudent);
        // if (!is_null($student_id) && $student_id !== "") {
        //     // $this->student_data = student::where('id', $student_id)->first();
        //     $student_data = Student::where('id', $student_id)->first();
        //     $this->studentLastName = $student_data->last_name;
        //     $this->studentFirstName = $student_data->first_name;
        //     $this->studentMiddleName = $student_data->middle_name;
        //     $this->studentSuffixName = $student_data->suffix_name;
        //     $this->studentGender = $student_data->gender;
        //     $this->studentBirthdate = $student_data->birthdate;
        //     $this->studentNationality = $student_data->nationality;
        //     $this->studentContactNumber = $student_data->contact_number;
        //     $this->studentEmail = $student_data->email;
        //     $this->studentAddress = $student_data->address;
        //     $this->studentCourse = $student_data->course_id;

        // }
      

    }
    public function render()
    {
        return view('livewire.pre-enrolled-students-controller')
            ->with('students', Student::orderBy('id', 'ASC')->latest()->get());
    }
}
