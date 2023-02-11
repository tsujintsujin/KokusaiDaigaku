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
    public $studentContactNumber = '09093545643';
    public $studentEmail;
    public $studentAddress;
    public $contactLastName;
    public $contactFirstName;
    public $contactMiddleName;
    public $contactSuffixName;
    public $contactGender;
    public $contactNationality;
    public $contactContactNumber = '09093545645';
    public $contactEmail;
    public $contactAddress;
    public $contactRelationship;
    public $selectedSection;
    protected function rules()
    {
        // mga condition sa input ng data sa creating stdents
        return [
            'selectedCourse' => 'required',
            'selectedSection' => 'required',
            'studentLastName' => 'required',
            'studentFirstName' => 'required',
            'studentGender' => 'required',
            'studentBirthdate' => 'required',
            'studentNationality' => 'required',
            'studentContactNumber' => 'required|numeric|digits:11',
            'studentEmail' => 'email',
            'studentAddress' => 'required',
            'contactLastName' => 'required',
            'contactFirstName' => 'required',
            'contactGender' => 'required',
            'contactNationality' => 'required',
            'contactContactNumber' => 'required|numeric|digits:11',
            'contactEmail' => 'email',
            'contactAddress' => 'required',
            'contactRelationship' => 'required',
        ];
    }
    protected $messages = [
        'selectedCourse' => 'Select course',
        'selectedSection' => 'Select section',
        'studentLastName' => 'Last Name cannot be empty.',
        'studentFirstName' => 'First Name cannot be empty.',
        'studentGender' => 'Select gender',
        'studentBirthdate' => 'Select birthdate',
        'studentNationality' => 'Nationality cannot be empty.',
        'studentContactNumber.required' => 'Contact number cannot be empty.',
        'studentContactNumber.numeric' => 'Invalid contactnumber',
        'studentEmail' => 'invalid email.',
        'studentAddress' => 'Address cannot be empty.',
        'contactLastName' => 'Last Name cannot be empty.',
        'contactFirstName' => 'First Name cannot be empty.',
        'contactGender' => 'Select section',
        'contactNationality' => 'Nationality cannot be empty.',
        'contactContactNumber' => 'Contact number cannot be empty.',
        'contactContactNumber.numeric' => 'Invalid contactnumber',
        'contactEmail' => 'Invalid email.',
        'contactAddress' => 'Address cannot be empty.',
        'contactRelationship' => 'Relationship cannot be empty.',
    ];
   
    public function create()
    {
        $this->window = "create";
        // dump('hellow world');
        $this->validate();
        Student::create([
            'course_id' => $this->selectedCourse,
            'section_id' => $this->selectedSection,
            'last_name' => $this->studentLastName,
            'first_name' => $this->studentFirstName,
            'middle_name' => $this->studentMiddleName,
            'suffix_name' => $this->studentSuffixName,
            'gender' => $this->studentGender,
            'birthdate' => $this->studentBirthdate,
            'nationality' => $this->studentNationality,
            'contact_number' => $this->studentContactNumber,
            'email' => $this->studentEmail,
            'address' => $this->studentAddress,
        ]);

        // contact person table
        $contact = new ContactPerson;
        $contact->last_name = $this->contactLastName;
        $contact->first_name = $this->contactFirstName;
        $contact->middle_name = $this->contactMiddleName;
        $contact->suffix_name = $this->contactSuffixName;
        $contact->gender = $this->contactGender;
        $contact->nationality = $this->contactNationality;
        $contact->contact_number = $this->contactContactNumber;
        $contact->email = $this->contactEmail;
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
            // 'selectedCourse',
            // 'selectedSection',
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

    public function search_update()
    {
        $this->resetElements();
        $this->reset('selectedCourse', 'selectedSection');
        $this->window = "edit";
    }
    public function cancel()
    {
        $this->resetElements();
        $this->reset('selectedCourse', 'selectedSection');
        $this->window = "create";
        // $this->reset('selectedSection');

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
        $this->students = Student::orderBy('id', 'ASC')->latest()->get();
        $this->student_data;

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
            // $this->student_data = Student::where('id', $student_id)->get();

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


    public function courseErrorClear()
    {
        $this->resetValidation('selectedCourse');
    }
    public function sectionErrorClear()
    {
        $this->resetValidation('selectedSection');
    }
    public function studentLastNameErrorClear()
    {
        $this->resetValidation('studentLastName');
    }
    public function studentFirstNameErrorClear()
    {
        $this->resetValidation('studentFirstName');
    }
    public function studentMiddleNameErrorClear()
    {
        $this->resetValidation('studentMiddleName');
    }
    public function studentGenderErrorClear()
    {
        $this->resetValidation('studentGender');
    }
    public function studentNationalityErrorClear()
    {
        $this->resetValidation('studentNationality');
    }
    public function studentBirthdateErrorClear()
    {
        $this->resetValidation('studentBirthdate');
    }
    public function studentContactNumberErrorClear()
    {
        $this->resetValidation('studentContactNumber');
    }
    public function studentEmailErrorClear()
    {
        $this->resetValidation('studentEmail');
    }
    public function studentAddressErrorClear()
    {
        $this->resetValidation('studentAddress');
    }
    public function contactLastNameErrorClear()
    {
        $this->resetValidation('contactLastName');
    }
    public function contactFirstNameErrorClear()
    {
        $this->resetValidation('contactFirstName');
    }
    public function contactMiddleNameErrorClear()
    {
        $this->resetValidation('contactMiddleName');
    }
    public function contactGenderErrorClear()
    {
        $this->resetValidation('contactGender');
    }
    public function contactNationalityErrorClear()
    {
        $this->resetValidation('contactNationality');
    }
    public function contactRelationshipErrorClear()
    {
        $this->resetValidation('contactRelationship');
    }
    public function contactContactNumberErrorClear()
    {
        $this->resetValidation('contactContactNumber');
    }
    public function contactEmailErrorClear()
    {
        $this->resetValidation('contactEmail');
    }
    public function contactAddressErrorClear()
    {
        $this->resetValidation('contactAddress');
    }
    public function render()
    {
        return view('livewire.student-management');
    }
}
