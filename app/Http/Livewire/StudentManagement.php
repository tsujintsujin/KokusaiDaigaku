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
    public $selectedSection;

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
    // $cntct_
    public function create()
    {
        $this->window = "create";
        $student = new Student;
        $student->course_id = $this->selectedCourse;
        $student->section_id = $this->selectedSection;
        $student->last_name = $this->studentLastName;
        $student->first_name = $this->studentFirstName;
        $student->middle_name = $this->studentMiddleName;
        $student->suffix_name = $this->studentSuffixName;
        $student->gender = $this->studentGender;
        $student->birthdate = $this->studentBirthdate;
        $student->nationality = $this->studentNationality;
        $student->contact_number = $this->studentContactNumber;
        $student->email = $this->studentEmail;
        $student->address = $this->studentAddress;
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
        $this->resetElements();
    }
    public function resetElements()
    {
        $this->reset(
            'selectedCourse',
            'selectedSection',
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
            'contactLastName',
            'contactFirstName',
            'contactMiddleName',
            'contactSuffixName',
            'contactGender',
            'contactNationality',
            'contactContactNumber',
            'contactEmail',
            'contactAddress',
            'contactRelationship',
            'selectedStudent'
        );
    }
    public function update()
    {
        dump($this->studentLastName);
        $this->resetElements();
    }

    public function edit()
    {
        $this->window = "edit";
        $this->resetElements();
    }
    public function back()
    {
        $this->window = "create";
        $this->resetElements();
    }

    // for dropdwons
    public $selectedCourse = NULL;
    public $sections;
    public $courses;

    public $selectedStudent = NULL;
    public $students;
    public $student_data;
    public $student_section;
    public $student_course;

    public function mount()
    {
        //for selecting course and section in creating student
        $this->courses = Course::all();
        $this->sections = collect();

        //edit of student data.
        $this->students = Student::all();
        $this->student_data;
        $this->student_section;
        $this->student_course;
        $this->studentLastName;

        // $this->sections = collect();
    }
    // this is for dropdown selected course.
    public function updatedSelectedCourse($course)
    {
        if (!is_null($course)) {
            $this->sections = Section::where('course_id', $course)->get();
        }
    }


    // edit student 
    // this is for dropdown selected student.
    public function updatedSelectedStudent($student_id)
    {
        if ($this->selectedStudent == 0) {
            $this->resetElements();
        } elseif (!is_null($student_id) || $this->selectedStudent != 0) {
            //  $this->student_data variable is use in student-management.blade.php
            $this->student_data = Student::where('id', $student_id)->get();

            // student course
            $std_crs = Student::select('course_id')->where('id', $student_id)->first();
            $course_id = $std_crs->course_id;
            $this->student_course = Course::where('id', $course_id)->get();
            $this->selectedCourse = $course_id;
            $this->updatedSelectedCourse($course_id);

            // student section
            $std_sctn = Student::select('section_id')->where('id', $student_id)->first();
            $section_id = $std_sctn->section_id;
            $this->student_section = Section::where('id', $section_id)->get();


            // getting the data of student
            $stdnt_data = Student::where('id', $student_id)->first();
            $this->studentLastName = $stdnt_data->last_name;
            $this->studentFirstName = $stdnt_data->first_name;
            $this->studentMiddleName = $stdnt_data->middle_name;
            $this->studentSuffixName = $stdnt_data->suffix_name;
            $this->studentGender = $stdnt_data->gender;
            $this->studentBirthdate = $stdnt_data->birthdate;
            $this->studentNationality = $stdnt_data->nationality;
            $this->studentContactNumber = $stdnt_data->contact_number;
            $this->studentEmail = $stdnt_data->email;
            $this->studentAddress = $stdnt_data->address;

            // getting the data of contact person.
            $ContactPersonStudent = ContactPersonStudent::where('student_id', $student_id)->first();
            $cntct_id = $ContactPersonStudent->contact_person_id;
            $cntct_data = ContactPerson::where('id', $cntct_id)->first();
            $this->contactLastName = $cntct_data->last_name;
            $this->contactFirstName = $cntct_data->first_name;
            $this->contactMiddleName = $cntct_data->middle_name;
            $this->contactSuffixName = $cntct_data->suffix_name;
            $this->contactGender = $cntct_data->gender;
            $this->contactNationality = $cntct_data->nationality;
            $this->contactContactNumber = $cntct_data->contact_number;
            $this->contactEmail = $cntct_data->email;
            $this->contactAddress = $cntct_data->address;

            // $relationship = $ContactPersonStudent->relationship;
            $this->contactRelationship = $ContactPersonStudent->relationship;
        }
    }



    public function render()
    {
        return view('livewire.student-management');
    }
}
