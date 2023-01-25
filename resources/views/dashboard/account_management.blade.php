@extends('dashboard.layout')
@section('content')
    <div class="container col justify-content-center col-9 m-5">

        {{-- tab for adding teacher and student --}}
        <div class="d-flex  row  " id="courseContainers" style="background-color: #eeefff">
            <div class="col">
                <ul class="nav dashboardContainer p-3 mb-4">
                    <li class="nav-item ">
                        <a class="nav-link active" style="color: #fafafc;" aria-current="page" href="#">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fafafc;">Teachers</a>
                    </li>
                </ul>


            </div>
            <div>
                <button type="button" class="btn  float-end px-5 py-2 "
                    style=" background-color: #393280; color: #fafafc;">Edit Mode</button>
                <h5>Student : <span class="text-muted">ID of Student</span></h5>
                <div class="dropdown mb-3 w-25 text-start">
                    {{-- <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Course Name"
                    style="background-color:#eeefff; 
                    border: 0px  none #d9d9da;  
                    border-bottom: 2px  solid #d9d9da;"> --}}
                    <a class="nav-link   py-3 active btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color:#eeefff; 
                    border: 0px  none #d9d9da;  
                    border-bottom: 2px  solid #d9d9da;">
                        Course
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item active" href="#">Manage Account</a></li>
                        <li><a class="dropdown-item" href="#">Change Password Req.</a></li>

                    </ul>
                </div>

            </div>

        </div>
        {{-- student account manage --}}



    </div>

    </div>
@endsection
