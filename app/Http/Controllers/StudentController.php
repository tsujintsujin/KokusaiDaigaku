<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ContactPerson;
use App\Models\ContactPersonStudent;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // student table
        $student = new Student;
        $student->last_name = $request->studentLastName;
        $student->first_name = $request->studentFirstName;
        $student->middle_name = $request->studentMiddleName;
        $student->suffix_name = $request->studentSuffixName;
        $student->gender = $request->studentGender;
        $student->birthdate = $request->studentBirthdate;
        $student->nationality = $request->studentNationality;
        $student->contact_number = $request->studentContactNumber;
        $student->address = $request->studentAddress;
        $student->password = $request->studentLastName;
        $student->course_id = $request->course_id;
        $student->section_id = $request->section_id;
        $student->save();

        // contact person table
        $contact = new ContactPerson;
        $contact->last_name = $request->contactLastName;
        $contact->first_name = $request->contactFirstName;
        $contact->middle_name = $request->contactMiddleName;
        $contact->suffix_name = $request->contactSuffixName;
        $contact->gender = $request->contactGender;
        $contact->nationality = $request->contactNationality;
        $contact->contact_number = $request->contactContactNumber;
        $contact->address = $request->contactAddress;
        $contact->save();

        // contact person student table
        $contact_person_student = new ContactPersonStudent;
        $contact_person_student->relationship = $request->contactRelationship;
        $contact_person_student->contact_person_id = ContactPerson::orderBy('id', 'desc')->first()->id;
        $contact_person_student->student_id = Student::orderBy('id', 'desc')->first()->id;
        $contact_person_student->save();
        return redirect()->route('account_management'); //->with('courses',Course::orderBy('name','asc'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
