<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\ContactPerson;
use App\Models\ContactPersonTeacher;
use App\Models\TeacherAccount;
use App\Models\ArchiveTeacher;
use App\Models\User;
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
            'teacherGender' => 'required',
            'teacherBirthdate' => 'required',
            'teacherNationality' => 'required',
            'teacherContactNumber' => 'required|numeric|digits:11',
            'teacherEmail' => 'email',
            'teacherAddress' => 'required',
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
        'teacherLastName' => '**invalid**',
        'teacherFirstName' => '**invalid**',
        'teacherGender' => '**invalid**',
        'teacherBirthdate' => '**invalid**',
        'teacherNationality' => '**invalid**',
        'teacherContactNumber' => '**invalid**',
        'teacherEmail' => '**invalid**',
        'teacherAddress' => '**invalid**',
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



        User::create([
            'name' => Teacher::orderBy('id', 'desc')->first()->last_name,
            'email' => Teacher::orderBy('id', 'desc')->first()->email,
            'role' => 'teacher',
            'password' => Hash::make($this->teacherLastName),
        ]);
        $this->resetElements();

    }
    public function resetElements()
    { 
        $this->clearErrors();
        
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
        // dump($this->teacherLastName);
        $this->validate();
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
        $teacher->course_id = $this->selectedCourse;
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

        $this->reset('selectedTeacher', 'selectedCourse');
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
  
    public function updatingSelectedTeacher($teacher_id)
    {
        // dump($teacher_id);
        if (!is_null($teacher_id) && $teacher_id !== "") {
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
            $this->selectedCourse = $teacher_data->course_id;


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

        } elseif ($teacher_id === "") {
            $this->reset('selectedTeacher', 'selectedCourse');
            $this->resetElements();
        }
        $this->clearErrors();

    }

    
    public function archive()
    {
        $this->validate();
        $teacher = new ArchiveTeacher;

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
        $teacher_id = $this->selectedTeacher;
        $teacher->save();

        $ContactPersonTeacher = ContactPersonTeacher::where('teacher_id', $teacher_id )->first();
        $cntct_id = $ContactPersonTeacher->contact_person_id;
        $cntct_data = ContactPerson::find($cntct_id);
        $cntct_data->delete();

        $teacher_delete = Teacher::find($this->selectedTeacher);
        $teacher_delete->delete();
        $this->reset('selectedTeacher', 'selectedCourse');
        $this->resetElements();
        $this->clearErrors();
        
        
    }

    public function courseErrorClear()
    {
        $this->resetValidation('selectedCourse');
    }

    public function teacherLastNameErrorClear()
    {
        $this->resetValidation('teacherLastName');
    }
    public function teacherFirstNameErrorClear()
    {
        $this->resetValidation('teacherFirstName');
    }

    public function teacherGenderErrorClear()
    {
        $this->resetValidation('teacherGender');
    }
    public function teacherNationalityErrorClear()
    {
        $this->resetValidation('teacherNationality');
    }
    public function teacherBirthdateErrorClear()
    {
        $this->resetValidation('teacherBirthdate');
    }
    public function teacherContactNumberErrorClear()
    {
        $this->resetValidation('teacherContactNumber');
    }
    public function teacherEmailErrorClear()
    {
        $this->resetValidation('teacherEmail');
    }
    public function teacherAddressErrorClear()
    {
        $this->resetValidation('teacherAddress');
    }
    public function contactLastNameErrorClear()
    {
        $this->resetValidation('contactLastName');
    }
    public function contactFirstNameErrorClear()
    {
        $this->resetValidation('contactFirstName');
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
        $this->teacherLastNameErrorClear();
        $this->teacherFirstNameErrorClear();
        $this->teacherGenderErrorClear();
        $this->teacherNationalityErrorClear();
        $this->teacherBirthdateErrorClear();
        $this->teacherContactNumberErrorClear();
        $this->teacherEmailErrorClear();
        $this->teacherAddressErrorClear();
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

        return view('livewire.teacher-management')
            ->with('courses', Course::latest()->get())
            ->with('teachers', Teacher::orderBy('id', 'ASC')->latest()->get());
    }
}
