<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\ContactPerson;
use App\Models\ContactPersonTeacher;
use App\Models\TeacherAccount;
use Illuminate\Support\Facades\Hash;

class TeacherManagement extends Component
{

    public $window = "create";
    public $teacherLastName;
    public $teacherFirstName;
    public $teacherMiddleName;
    public $teacherSuffixName;
    public $teacherGender;
    public $teacherBirthdate;
    public $teacherNationality;
    public $teacherContactNumber;
    public $teacherEmail;
    public $teacherAddress;
    public $teacherType;
    public $selectedCourse;
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
        $teacher = new Teacher;
        $teacher->last_name = $this->teacherLastName;
        $teacher->first_name = $this->teacherFirstName;
        $teacher->middle_name = $this->teacherMiddleName;
        $teacher->suffix_name = $this->teacherSuffixName;
        $teacher->gender = $this->teacherGender;
        $teacher->birthdate = $this->teacherBirthdate;
        $teacher->nationality = $this->teacherNationality;
        $teacher->contact_number = $this->teacherContactNumber;
        $teacher->address = $this->teacherAddress;
        $teacher->course_id = $this->selectedCourse;
        $teacher->employment_type = 'Fulltime';
        $teacher->save();

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

        // contact person teacher table
        $contact_person_teacher = new ContactPersonteacher;
        $contact_person_teacher->relationship = $this->contactRelationship;
        $contact_person_teacher->contact_person_id = ContactPerson::orderBy('id', 'desc')->first()->id;
        $contact_person_teacher->teacher_id = teacher::orderBy('id', 'desc')->first()->id;
        $contact_person_teacher->save();



        TeacherAccount::create([
            'username' => Teacher::orderBy('id', 'desc')->first()->id,
            'teacher_id' => Teacher::orderBy('id', 'desc')->first()->id,
            'password' => Hash::make($this->teacherLastName),
            'type' => 'teacher',
        ]);
        $this->reset(
            'teacherLastName',
            'teacherFirstName',
            'teacherMiddleName',
            'teacherSuffixName',
            'teacherGender',
            'teacherBirthdate',
            'teacherNationality',
            'teacherContactNumber',
            'teacherEmail',
            'teacherAddress',
            'teacherType',
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
    public function back()
    {
        $this->window = "create";
      
    }
    public function edit()
    {
        $this->window = "edit";
    }

    public function render()
    {
        return view('livewire.teacher-management')
            ->with('courses', Course::latest()->get());
    }
}
