<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;
use App\Models\Student;
use App\Models\ContactPerson;
use App\Models\ContactPersonStudent;
use App\Models\StudentAccount;
use Illuminate\Support\Facades\Hash;
class StudentManagement extends Component
{
    public $window = "create";
    public $studentLastName;
    public $studentFirstName;
    public $studentMiddleName;
    public $studentSuffixName;
    public $studentGender;
    public $studentBirthdate;
    public $studentNationality;
    public $studentContactNumber;
    public $studentEmail;
    public $studentAddress;
    public $selectedSection;
    public $contactLastName;
    public $contactFirstName;
    public $contactMiddleName;
    public $contactSuffixName;
    public $contactGender;
    public $contactNationality;
    public $contactContactNumber;
    public $contactEmail;
    public $contactAddress;
    public $contactRelationship;
    public function create()
    {
        $this->window = "create";
        $student = new Student;
        $student->last_name = $this->studentLastName;
        $student->first_name = $this->studentFirstName;
        $student->middle_name = $this->studentMiddleName;
        $student->suffix_name = $this->studentSuffixName;
        $student->gender = $this->studentGender;
        $student->birthdate = $this->studentBirthdate;
        $student->nationality = $this->studentNationality;
        $student->contact_number = $this->studentContactNumber;
        $student->address = $this->studentAddress;
        $student->course_id = $this->selectedCourse;
        $student->section_id = $this->selectedSection;
        $student->save();

        // contact person table
        $contact = new ContactPerson;
        $contact->last_name = $this->contactLastName;
        $contact->first_name = $this->contactFirstName;
        $contact->middle_name = $this->contactMiddleName;
        $contact->suffix_name = $this->contactSuffixName;
        $contact->gender = $this->contactGender;
        $contact->nationality = $this->contactNationality;
        $contact->contact_number = $this->contactContactNumber;
        $contact->address = $this->contactAddress;
        $contact->save();

        // contact person student table
        $contact_person_student = new ContactPersonStudent;
        $contact_person_student->relationship = $this->contactRelationship;
        $contact_person_student->contact_person_id = ContactPerson::orderBy('id', 'desc')->first()->id;
        $contact_person_student->student_id = Student::orderBy('id', 'desc')->first()->id;
        $contact_person_student->save();
        StudentAccount::create([
            'username' => Student::orderBy('id', 'desc')->first()->id,
            'student_id' => Student::orderBy('id', 'desc')->first()->id,
            'password' => Hash::make($this->studentLastName),
            'type' => 'student',
        ]);

        $this->reset(
            'studentLastName',
            'studentFirstName',
            'studentMiddleName',
            'studentSuffixName',
            'studentGender',
            'studentBirthdate',
            'studentNationality',
            'studentContactNumber',
            'studentEmail',
            'studentAddress',
            'selectedSection',
            'contactLastName',
            'contactFirstName',
            'contactMiddleName',
            'contactSuffixName',
            'contactGender',
            'contactNationality',
            'contactContactNumber',
            'contactEmail',
            'contactAddress',
            'contactRelationship'
        );
    }
    //    wire:model="" /
    
    public function edit()
    {
        $this->window = "edit";
    }
    public function back()
    {
        $this->window = "create";
      
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
        return view('livewire.student-management')
            ->with('courses', Course::latest()->get());
    }
}
