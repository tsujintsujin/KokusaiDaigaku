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
    public $window = "edit";
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

    // for dropdwons
    public $selectedCourse = NULL;
    public $sections;
    public $courses;

    public $selectedStudent = NULL;
    public $students;
    public $student_data;
    public $student_section;
    public function mount()
    {
        //for selecting course and section in creating student
        $this->courses = Course::all();
        $this->sections = collect();

        //edit of student data.
        $this->students = Student::all();
        $this->student_data;
        $this->student_section;
        // $this->sections = collect();
    }
    // this is for dropdown selected course.
    public function updatedSelectedCourse($course)
    {
        if (!is_null($course)) {
            $this->sections = Section::where('course_id', $course)->get();
        }
    }
    // this is for dropdown selected student.
    public function updatedSelectedStudent($student_id)
    {
        if (!is_null($student_id)) {
            $this->student_data = Student::where('id', $student_id)->get();
        }
    }


    // public function mount()
    // {
    //     $this->students = Student::all();
    //     $this->courses = collect();
    //     $this->sections = collect();
    // }


    public function render()
    {
        return view('livewire.student-management')
            // ->with('courses', Course::latest()->get())
            // ->with('students', Student::latest()->get())
        ;
    }
}
