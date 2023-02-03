@extends('dashboard.admin_layout')
@section('title', 'Courses & Section')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">

        <ul class="row dashboardTitleContainer nav nav-fill rounded-top">
            <li class="col-3 d-flex flex-column rounded-top">
                <a class="row ps-4 rounded-top nav-link" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab">
                    <h3 class="fw-bold pt-2 text-white">Course</h3>
                </a>
               </li>
            <li class="col-3 d-flex flex-column rounded-top">
                <a class="row ps-4 rounded-top nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2"
                    role="tab">
                    <h3 class="fw-bold pt-2 text-white">Section</h3>
                </a>
            </li>
            
        </ul>


        {{--  --}}
        {{--  --}}
        {{--  --}}
        {{--  --}}
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade active show" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">

                <div class="row dashboardContainer ps-4 pb-4">
<<<<<<<< HEAD:resources/views/dashboard/admin_add_courses_sections.blade.php

                    <div class="row mt-4">
                        <div class="col">
                            
                            <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                <input type="email" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Course Full Name</label>
                            </div>
========
                    <form action="{{ route('createcourse') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
>>>>>>>> main-save:resources/views/dashboard/admin_add_courses_subjects.blade.php



                            <div class="col-4">
                                <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                    <input type="text" id="form1Example1" class="form-control" name="name" />
                                    <label class="form-label" for="form1Example1">Course</label>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                    <input type="text" id="form1Example1" class="form-control" name="description" />
                                    <label class="form-label" for="form1Example1">Description</label>
                                </div>
                            </div>
                        </div>
<<<<<<<< HEAD:resources/views/dashboard/admin_add_courses_sections.blade.php
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-1 btn btn-primary ">
                            Add
                        </button>
                        <button class="p-2 me-3 col-1 btn btn-primary ">
                            Edit
                        </button>
                    </div>
========
                        <div class="row d-flex justify-content-end">
                            <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                                Add
                            </button>
                        </div>
                    </form>
>>>>>>>> main-save:resources/views/dashboard/admin_add_courses_subjects.blade.php
                </div>
            </div>



<<<<<<<< HEAD:resources/views/dashboard/admin_add_courses_sections.blade.php
            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <div class="row dashboardContainer ps-4 pb-4">
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="col-8">

                                <div class="dropdown">
                                  
                                    <a class="btn btn-primary dropdown-toggle w-100 text-start mt-1" href="#" role="button"
                                        id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                                        Select Course
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">BSCS</a></li>
========
            {{-- section add --}}
            <div class="tab-pane fade " id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <form action="{{ route('createsection') }}" method="POST">
                    @csrf
                    <div class="row dashboardContainer ps-4 pb-4">
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="col">
                                    <div class="dropdown">
                                           <input type="number" name="course">
                                        <a class="btn btn-primary dropdown-toggle w-100 text-start mt-1" href="#"
                                            role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                            aria-expanded="false">
                                            Select Course
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @foreach ($courses as $course)
                                                <li><a class="dropdown-item" href="#">{{ $course->name }}</a></li>
                                            @endforeach
                                            {{-- <li><a class="dropdown-item" href="#">BSCS</a></li>
>>>>>>>> main-save:resources/views/dashboard/admin_add_courses_subjects.blade.php
                                        <li><a class="dropdown-item" href="#">BSBA</a></li>
                                        <li><a class="dropdown-item" href="#">BSTM</a></li> --}}
                                        </ul>
                                    </div>



                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                    <input type="text" id="form1Example1" class="form-control" name="name"/>
                                    <label class="form-label" for="form1Example1">Section Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                                Add
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        {{--  --}}
        {{--  --}}
        {{--  --}}
        {{--  --}}
<<<<<<<< HEAD:resources/views/dashboard/admin_add_courses_sections.blade.php
     
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Active Courses</th>
                    <th>Description</th>
                    <th>Number of Sections</th>
                    <th>Total Population</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Math 1</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 2</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 3</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 4</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 5</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 6</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>BSIT</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th>Math 8</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
        </table>
========
        <div class="row mt-5">
            <div class="col dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2">Add Subject</h3>
                </div>
                <form action="{{ route('createsubject') }}" method="POST">
                    @csrf
                    <div class="row dashboardContainer ps-4 pb-4  mt-3"">
                        <div class="row my-4">
                            <div class="col-2">
                                <form action=""></form>
                                <div class="dropdown">
                                    <h6 class="text-muted text-left ps-1">Select Course</h6>
                                    <input type="number" name="course">

                                    <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#"
                                        role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        Select Course
                                    </a>


                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @foreach ($courses as $course)
                                            <li><a class="dropdown-item" href="#">{{ $course->name }}</a></li>
                                        @endforeach
                                        {{-- <li><a class="dropdown-item" href="#">BSCS</a></li>
                                    <li><a class="dropdown-item" href="#">BSBA</a></li>
                                    <li><a class="dropdown-item" href="#">BSTM</a></li> --}}
                                    </ul>
                                </div>



                            </div>
                            <div class="col-2">
                                <div class="col">
                                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 mt-4">
                                        <input type="text" id="form1Example1" class="form-control"
                                            name="subject_code" />
                                        <label class="form-label" for="form1Example1">Subject Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-outline mb-4 bg-white rounded ">
                                    <textarea class="text-area-no-resize form-control " id="form4Example3" cols="1" max-rows="4"
                                        name="description"></textarea>
                                    <label class="form-label" for="form4Example3">Description</label>
                                </div>
                            </div>
                        </div>
                        {{-- justify-content-between --}}
                        <div class="row">
                            <div class="col-2">
                                <div class="form-outline mb-4 bg-white rounded p-1 mt-4 pt-2">
                                    <input type="number" id="form1Example1" class="form-control" name="units" />
                                    <label class="form-label" for="form1Example1">Units</label>
                                </div>

                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
>>>>>>>> main-save:resources/views/dashboard/admin_add_courses_subjects.blade.php
    </div>
@endsection
