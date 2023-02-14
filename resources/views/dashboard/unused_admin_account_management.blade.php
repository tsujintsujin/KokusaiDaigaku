@extends('dashboard.admin_layout')
@include('cal_css')
@section('title', 'Account')
@section('content')
<div class="container-fluid justify-content-center p-5  ms-3 me-4 rounded-top-left-1 rounded-top-right-1" id="contentM">
        <ul class="row dashboardTitleContainer nav nav-fill rounded-top">
            <li class="col-3 d-flex flex-column rounded-top">
                <a class="row ps-4 rounded-top nav-link" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab">
                    <h3 class="fw-bold pt-2 text-white">Student</h3>
                </a>
            <li class="col-3 d-flex flex-column rounded-top">
                <a class="row ps-4 rounded-top nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2"
                    role="tab">
                    <h3 class="fw-bold pt-2 text-white">Teacher</h3>
                </a>
        </ul>

        <!-- Tabs content -->

        {{-- student --}}
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade  active show" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <form action="{{ route('createstudent') }}" method="POST">
                    @csrf
                    <div class="row dashboardContainer ps-4 pb-4">
                        <div class="row mt-4">
                            <div class="col-3">
                                <h2 class="fw-bold text-muted">Add Student:</h2>
                            </div>
                            <div class="col-4">
                                <h2 class="fw-bold text-muted">ID: 523643734</h2>

                                {{-- enable the one below during edit mode --}}

                                {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Student Name</label>
                            </div> --}}
                            </div>
                            <div class="col"></div>
                            <div class="col-3 d-flex justify-content-end">
                                <button class=" me-3 col-5 btn btn-primary">
                                    Edit Mode
                                </button>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-2">

                                <div class="dropdown">
                                    <h6 class="text-muted text-left ps-1">Select Course</h6>
                                    <input type="text" name="course_id">
                                    <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#"
                                        role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        BSIT
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">BSCS</a></li>
                                        <li><a class="dropdown-item" href="#">BSBA</a></li>
                                        <li><a class="dropdown-item" href="#">BSTM</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="dropdown">
                                    <h6 class="text-muted text-left ps-1">Section</h6>
                                    <input type="text" name="section_id">
                                    <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#"
                                        role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        BSIT
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">BSCS</a></li>
                                        <li><a class="dropdown-item" href="#">BSBA</a></li>
                                        <li><a class="dropdown-item" href="#">BSTM</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" name="studentLastName" />
                                    <label class="form-label" for="form1Example1">Last Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control"
                                        name="studentMiddleName" />
                                    <label class="form-label" for="form1Example1">Middle Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" name="studentFirstName" />
                                    <label class="form-label" for="form1Example1">First Name</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control"
                                        name="studentSuffixName" />
                                    <label class="form-label" for="form1Example1">Pre/Suffix</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <hr class="col hr my-4">
                        </div>
                        <div class="row">
                            <div class="col text-center pt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="studentGender"
                                        id="inlineRadio1" value="male" />
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="studentGender"
                                        id="inlineRadio2" value="female" />
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control"
                                        name="studentNationality" />
                                    <label class="form-label" for="form1Example1">Nationality</label>
                                </div>
                            </div>
                            <div class="col-1 text-end pt-2">
                                <h5>Birthdate:</h5>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="date" id="form1Example1" class="form-control"
                                        name="studentBirthdate" />
                                    <label class="form-label" for="form1Example1"></label>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-2">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="number" id="form1Example1" class="form-control"
                                        name="studentContactNumber" />
                                    <label class="form-label" for="form1Example1">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="email" id="form1Example1" class="form-control" name="studentEmail" />
                                    <label class="form-label" for="form1Example1">Email</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control"
                                        name="studentAddress" />
                                    <label class="form-label" for="form1Example1">Address</label>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="row  ps-4 pb-4">
                        <div class="row mt-4">
                            <div class="col-3 " type="button" data-mdb-toggle="collapse" data-mdb-target="#accord">
                                <h2 class="fw-bold text-muted">Contact Person ▾</h2>
                            </div>
                        </div>
                        <div class="accordion-collapse collapse" id="accord">
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactLastName" />
                                        <label class="form-label" for="form1Example1">Last Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactMiddleName" />
                                        <label class="form-label" for="form1Example1">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactFirstName" />
                                        <label class="form-label" for="form1Example1">First Name</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactSuffixName" />
                                        <label class="form-label" for="form1Example1">Pre/Suffix</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <hr class="col hr my-4">
                            </div>
                            <div class="row">
                                <div class="col text-center pt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contactGender"
                                            id="inlineRadio1" value="male" />
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contactGender"
                                            id="inlineRadio2" value="female" />
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactNationality" />
                                        <label class="form-label" for="form1Example1">Nationality</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactRelationship" />
                                        <label class="form-label" for="form1Example1">Relationship</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row mt-4">
                                <div class="col-2">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactContactNumber" />
                                        <label class="form-label" for="form1Example1">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="email" id="form1Example1" class="form-control"
                                            name="contactEmail" />
                                        <label class="form-label" for="form1Example1">Email</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline bg-white rounded p-1">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="contactAddress" />
                                        <label class="form-label" for="form1Example1">Address</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 d-flex justify-content-end">
                                <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            {{-- teacher --}} {{-- teacher --}} {{-- teacher --}} {{-- teacher --}} {{-- teacher --}}
            {{-- teacher --}}



            <div class="tab-pane fade " id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <div class="row  ps-4 pb-4">
                    <div class="row mt-4">
                        <div class="col-3">
                            <h2 class="fw-bold text-muted">Add Teacher:</h2>
                        </div>
                        <div class="col-4">
                            <h2 class="fw-bold text-muted">ID: 523643734</h2>

                            {{-- enable the one below during edit mode --}}

                            {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Student Name</label>
                            </div> --}}
                        </div>
                        <div class="col"></div>
                        <div class="col-3 d-flex justify-content-end">
                            <button class=" me-3 col-5 btn btn-primary">
                                Edit Mode
                            </button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-2">

                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Last Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Middle Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">First Name</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Pre/Suffix</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="col hr my-4">
                    </div>
                    <div class="row">
                        <div class="col text-center pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Nationality</label>
                            </div>
                        </div>
                        <div class="col-1 text-end pt-2">
                            <h5>Birthdate:</h5>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="date" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1"></label>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Address</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  --}}





                {{--  --}}
                <div class="row  ps-4 pb-4">
                    <div class="row mt-4">
                        <div class="col-3 " type="button" data-mdb-toggle="collapse" data-mdb-target="#accord">
                            <h2 class="fw-bold text-muted">Contact Person ▾</h2>
                        </div>
                    </div>
                    <div class="accordion-collapse collapse" id="accord">
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Last Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Middle Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">First Name</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Pre/Suffix</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <hr class="col hr my-4">
                        </div>
                        <div class="row">
                            <div class="col text-center pt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Nationality</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Relationship</label>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-2">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Contact Number</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Email</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline bg-white rounded p-1">
                                    <input type="text" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 d-flex justify-content-end">
                            <button class="p-2 me-3 col-1 btn btn-primary ">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs content -->
@endsection
