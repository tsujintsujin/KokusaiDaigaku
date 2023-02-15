<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;
use App\Models\Student;
use App\Models\ContactPerson;
use App\Models\ContactPersonStudent;
use App\Models\StudentAccount;
use App\Models\ArchiveStudent;
use App\Models\User;
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
        'selectedCourse' => '**invalid**',
        'selectedSection' => '**invalid**',
        'studentLastName' => '**invalid**',
        'studentFirstName' => '**invalid**',
        'studentGender' => '**invalid**',
        'studentBirthdate' => '**invalid**',
        'studentNationality' => '**invalid**',
        'studentContactNumber' => '**invalid**',
        'studentEmail' => '**invalid**',
        'studentAddress' => '**invalid**',
        'contactLastName' => '**invalid**',
        'contactFirstName' => '**invalid**',
        'contactGender' => '**invalid**',
        'contactNationality' => '**invalid**',
        'contactContactNumber' => '**invalid**',
        'contactEmail' => '**invalid**',
        'contactAddress' => '**invalid**',
        'contactRelationship' => '**invalid**',
    ];

    public function create()
    {
        $this->validate();
        $this->window = "create";
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

        User::create([
            'name' => Student::orderBy('id', 'desc')->first()->last_name,
            'email' => Student::orderBy('id', 'desc')->first()->email,
            'role' => 'student',
            'password' => Hash::make($this->studentLastName),
        ]);
        $this->resetElements();
    }
    public function resetElements()
    {
        $this->clearErrors();
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
            // 'selectedStudent'
        );
    }
    public function cancel()
    {
        $this->resetElements();
        $this->reset('selectedCourse', 'selectedSection');
        $this->window = "create";
        // $this->reset('selectedSection');

    }
    public function update()
    {
        $this->validate();
        $student = Student::find($this->selectedStudent);
        // $student->course_id = $this->selectedCourse;
        // $student->section_id = $this->selectedSection;
        if (is_null($this->selectedCourse)) {
            $this->selectedCourse = $student->course_id;
        } else {
            $student->course_id = $this->selectedCourse;
        }
        if (is_null($this->selectedSection)) {
            $this->selectedSection = $student->course_id;
        } else {
            $student->section_id = $this->selectedSection;
        }
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
        $student->course_id = $this->selectedCourse;
        $student->save();
        // find('student_id,contact_id')->
        $ContactPersonstudent = ContactPersonstudent::where('student_id', $this->selectedStudent)->first();
        $cntct_id = $ContactPersonstudent->contact_person_id;
        $cntct_data = ContactPerson::find($cntct_id);
        $cntct_data->last_name =  $this->contactLastName;
        $cntct_data->first_name =  $this->contactFirstName;
        $cntct_data->middle_name =  $this->contactMiddleName;
        $cntct_data->suffix_name =  $this->contactSuffixName;
        $cntct_data->gender =  $this->contactGender;
        $cntct_data->nationality =  $this->contactNationality;
        $cntct_data->contact_number =  $this->contactContactNumber;
        $cntct_data->email =  $this->contactEmail;
        $cntct_data->address =  $this->contactAddress;

        $ContactPersonstudent->relationship =  $this->contactRelationship;

        $ContactPersonstudent->save();
        $cntct_data->save();

        $this->reset('selectedStudent', 'selectedCourse');
        $this->resetElements();
    }


    public function search_update()
    {
        $this->resetElements();
        $this->reset('selectedCourse', 'selectedSection');
        $this->window = "edit";
        $this->clearErrors();
    }

    public $selectedCourse = NULL;

    public $selectedStudent = NULL;
  
    public function updatingselectedStudent($student_id)
    {
        // dump($student_id);
        if (!is_null($student_id) && $student_id !== "") {
            // $this->student_data = student::where('id', $student_id)->first();
            $student_data = Student::where('id', $student_id)->first();
            $this->studentLastName = $student_data->last_name;
            $this->studentFirstName = $student_data->first_name;
            $this->studentMiddleName = $student_data->middle_name;
            $this->studentSuffixName = $student_data->suffix_name;
            $this->studentGender = $student_data->gender;
            $this->studentBirthdate = $student_data->birthdate;
            $this->studentNationality = $student_data->nationality;
            $this->studentContactNumber = $student_data->contact_number;
            $this->studentEmail = $student_data->email;
            $this->studentAddress = $student_data->address;
            $this->selectedCourse = $student_data->course_id;
            $this->selectedSection = $student_data->section_id;

            $ContactPersonstudent = ContactPersonstudent::where('student_id', $student_id)->first();
            $cntct_id = $ContactPersonstudent->contact_person_id;
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

            $this->contactRelationship = $ContactPersonstudent->relationship;
        } elseif ($student_id === "") {
            $this->reset('selectedStudent', 'selectedCourse','selectedSection');
            $this->resetElements();
        }
        $this->clearErrors();
    }

    public function archive()
    {
        $this->validate();
        $student = new ArchiveStudent;
        if (is_null($this->selectedCourse)) {
            $this->selectedCourse = $student->course_id;
        } else {
            $student->course_id = $this->selectedCourse;
        }
        if (is_null($this->selectedSection)) {
            $this->selectedSection = $student->course_id;
        } else {
            $student->section_id = $this->selectedSection;
        }
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
        $student->course_id = $this->selectedCourse;
        
        $student_id = $this->selectedStudent;
        $student->save();

        $ContactPersonstudent = ContactPersonstudent::where('student_id', $student_id )->first();
        $cntct_id = $ContactPersonstudent->contact_person_id;
        $cntct_data = ContactPerson::find($cntct_id);
        $cntct_data->delete();

        $student_delete = student::find($this->selectedStudent);
        $student_delete->delete();
        $this->reset('selectedStudent', 'selectedCourse');
        $this->resetElements();
        $this->clearErrors();
        
        
    }
    // public function mount()
    // {
    //     //for selecting course and section in creating student
    //     $this->courses = Course::all();
    //     $this->sections = collect();

    //     //edit of student data.
    //     $this->students = Student::orderBy('id', 'ASC')->latest()->get();
    //     $this->student_data;

    //     // $this->sections = collect();
    // }
    // // this is for dropdown selected course.
    // public function updatedSelectedCourse($course)
    // {
    //     if (!is_null($course)) {
    //         $this->sections = Section::where('course_id', $course)->get();
    //     }
    // }


    // // edit student 
    // // this is for dropdown selected student.
    // public function updatedselectedStudent($student_id)
    // {
    //     if ($this->selectedStudent == 0) {
    //         $this->resetElements();
    //     } elseif (!is_null($student_id) || $this->selectedStudent != 0) {
    //         //  $this->student_data variable is use in student-management.blade.php
    //         $this->student_data = Student::where('id', $student_id)->get();

    //         // student course
    //         $std_crs = Student::select('course_id')->where('id', $student_id)->first();
    //         $course_id = $std_crs->course_id;
    //         $this->student_course = Course::where('id', $course_id)->get();
    //         $this->selectedCourse = $course_id;
    //         $this->updatedSelectedCourse($course_id);

    //         // student section
    //         $std_sctn = Student::select('section_id')->where('id', $student_id)->first();
    //         $section_id = $std_sctn->section_id;
    //         $this->student_section = Section::where('id', $section_id)->get();


    //         // getting the data of student
    //         $stdnt_data = Student::where('id', $student_id)->first();
    //         $this->studentLastName = $stdnt_data->last_name;
    //         $this->studentFirstName = $stdnt_data->first_name;
    //         $this->studentMiddleName = $stdnt_data->middle_name;
    //         $this->studentSuffixName = $stdnt_data->suffix_name;
    //         $this->studentGender = $stdnt_data->gender;
    //         $this->studentBirthdate = $stdnt_data->birthdate;
    //         $this->studentNationality = $stdnt_data->nationality;
    //         $this->studentContactNumber = $stdnt_data->contact_number;
    //         $this->studentEmail = $stdnt_data->email;
    //         $this->studentAddress = $stdnt_data->address;

    //         // getting the data of contact person.
    //         $ContactPersonStudent = ContactPersonStudent::where('student_id', $student_id)->first();
    //         $cntct_id = $ContactPersonStudent->contact_person_id;
    //         $cntct_data = ContactPerson::where('id', $cntct_id)->first();
    //         $this->contactLastName = $cntct_data->last_name;
    //         $this->contactFirstName = $cntct_data->first_name;
    //         $this->contactMiddleName = $cntct_data->middle_name;
    //         $this->contactSuffixName = $cntct_data->suffix_name;
    //         $this->contactGender = $cntct_data->gender;
    //         $this->contactNationality = $cntct_data->nationality;
    //         $this->contactContactNumber = $cntct_data->contact_number;
    //         $this->contactEmail = $cntct_data->email;
    //         $this->contactAddress = $cntct_data->address;

    //         // $relationship = $ContactPersonStudent->relationship;
    //         $this->contactRelationship = $ContactPersonStudent->relationship;
    //     }
    // }


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

    public function clearErrors()
    {
        $this->courseErrorClear();
        $this->studentLastNameErrorClear();
        $this->studentFirstNameErrorClear();
        $this->studentGenderErrorClear();
        $this->studentNationalityErrorClear();
        $this->studentBirthdateErrorClear();
        $this->studentContactNumberErrorClear();
        $this->studentEmailErrorClear();
        $this->studentAddressErrorClear();
        $this->contactLastNameErrorClear();
        $this->contactFirstNameErrorClear();
        $this->contactGenderErrorClear();
        $this->contactNationalityErrorClear();
        $this->contactRelationshipErrorClear();
        $this->contactContactNumberErrorClear();
        $this->contactEmailErrorClear();
        $this->contactAddressErrorClear();
    }
    public function render()
    {
        return view('livewire.student-management')
            ->with('courses', Course::latest()->get())
            ->with('sections', Section::latest()->get())
            ->with('students', Student::orderBy('id', 'ASC')->latest()->get());
    }
}
