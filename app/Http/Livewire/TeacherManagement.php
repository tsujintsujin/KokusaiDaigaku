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
    public $teacherContactNumber = '09094354564';
    public $teacherEmail;
    public $teacherAddress;
    public $selectedCourse;
    public $contactLastName;
    public $contactFirstName;
    public $contactMiddleName;
    public $contactSuffixName;
    public $contactGender;
    public $contactNationality;
    public $contactContactNumber = '09093545644';
    public $contactEmail;
    public $contactAddress;
    public $contactRelationship;

    protected function rules()
    {
        // mga condition sa input ng data sa creating stdents
        return [
            'selectedCourse' => 'required',
            'teacherLastName' => 'required',
            'teacherFirstName' => 'required',
            'teacherMiddleName' => 'required',
            'teacherGender' => 'required',
            'teacherBirthdate' => 'required',
            'teacherNationality' => 'required',
            'teacherContactNumber' => 'required|numeric|digits:11',
            'teacherEmail' => 'email',
            'teacherAddress' => 'required',
            'contactLastName' => 'required',
            'contactFirstName' => 'required',
            'contactMiddleName' => 'required',
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
        'teacherLastName' => '**invalid**',
        'teacherFirstName' => '**invalid**',
        'teacherMiddleName' => '**invalid**',
        'teacherGender' => '**invalid**',
        'teacherBirthdate' => '**invalid**',
        'teacherNationality' => '**invalid**',
        'teacherContactNumber' => '**invalid**',
        'teacherEmail' => '**invalid**',
        'teacherAddress' => '**invalid**',
        'contactLastName' => '**invalid**',
        'contactFirstName' => '**invalid**',
        'contactMiddleName' => '**invalid**',
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
        $teacher = new Teacher;
        $teacher->last_name = $this->teacherLastName;
        $teacher->first_name = $this->teacherFirstName;
        $teacher->middle_name = $this->teacherMiddleName;
        $teacher->suffix_name = $this->teacherSuffixName;
        $teacher->gender = $this->teacherGender;
        $teacher->birthdate = $this->teacherBirthdate;
        $teacher->nationality = $this->teacherNationality;
        $teacher->contact_number = $this->teacherContactNumber;
        $teacher->email = $this->teacherEmail;
        $teacher->address = $this->teacherAddress;
        $teacher->course_id = $this->selectedCourse;
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
        $contact->email = $this->contactEmail;
        $contact->address = $this->contactAddress;
        $contact->save();

        // contact person teacher table
        $contact_person_teacher = new ContactPersonTeacher;
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
        $this->resetElements();
    }
    public function resetElements()
    {
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
    public function cancel()
    {
        $this->window = "create";
        $this->resetElements();
        $this->reset('selectedTeacher');
    }
    public function update()
    {
        $teacher = Teacher::find($this->selectedTeacher);
        $teacher->last_name = $this->teacherLastName;
        $teacher->first_name = $this->teacherFirstName;
        $teacher->middle_name = $this->teacherMiddleName;
        $teacher->suffix_name = $this->teacherSuffixName;
        $teacher->gender = $this->teacherGender;
        $teacher->birthdate = $this->teacherBirthdate;
        $teacher->nationality = $this->teacherNationality;
        $teacher->contact_number = $this->teacherContactNumber;
        $teacher->email = $this->teacherEmail;
        $teacher->address = $this->teacherAddress;
        $teacher->save();
        // find('teacher_id,contact_id')->
        $ContactPersonTeacher = ContactPersonTeacher::where('teacher_id', $this->selectedTeacher)->first();
        $cntct_id = $ContactPersonTeacher->contact_person_id;
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

        $ContactPersonTeacher->relationship =  $this->contactRelationship;

        $ContactPersonTeacher->save();
        $cntct_data->save();

        $this->reset('selectedTeacher');
        $this->resetElements();
    }

    public function edit()
    {

        $this->window = "edit";
        $this->resetElements();
        $this->reset('selectedCourse');
        // $this->teacher_data;

    }
    public $selectedTeacher = NULL;
    // public $teachers;
    public $teacher_data;
    // public function mount()
    // {

    //     $this->teachers =  Teacher::latest()->orderBy('id','asc')->get();
    //     // $this->teacher_data;

    // }
    public function updatingSelectedTeacher($teacher_id)
    {
        // dump($teacher_id);
        if (!is_null($teacher_id)) {
            // $this->teacher_data = Teacher::where('id', $teacher_id)->first();
            $teacher_data = Teacher::where('id', $teacher_id)->first();
            $this->teacherLastName = $teacher_data->last_name;
            $this->teacherFirstName = $teacher_data->first_name;
            $this->teacherMiddleName = $teacher_data->middle_name;
            $this->teacherSuffixName = $teacher_data->suffix_name;
            $this->teacherGender = $teacher_data->gender;
            $this->teacherBirthdate = $teacher_data->birthdate;
            $this->teacherNationality = $teacher_data->nationality;
            $this->teacherContactNumber = $teacher_data->contact_number;
            $this->teacherEmail = $teacher_data->email;
            $this->teacherAddress = $teacher_data->address;

            $ContactPersonTeacher = ContactPersonTeacher::where('teacher_id', $teacher_id)->first();
            $cntct_id = $ContactPersonTeacher->contact_person_id;
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

            $this->contactRelationship = $ContactPersonTeacher->relationship;
        }
    }

    public function render()
    {
        return view('livewire.teacher-management')
            ->with('courses', Course::latest()->get())
            ->with('teachers', Teacher::orderBy('id', 'ASC')->latest()->get());
         
    }
}
