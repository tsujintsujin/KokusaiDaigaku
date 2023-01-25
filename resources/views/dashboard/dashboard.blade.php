@extends('dashboard.layout')
@section('content')
<div class="container col justify-content-center col-9 m-5">
    <div class="d-flex  row  " id="dashboardContainers" style="background-color: #eeefff">
        <div class="col-3 text-center">
            <h5 class=" dashboardContainer">Date</h5>
            <div style="border-right: 3px solid #d9d9da;">
                {{-- this is for calendar --}}
                test
            </div>
        </div>
        <div class="col-9 text-center">
            <h5 class="dashboardContainer">Users in the system</h5>
            <div class="row">

                <div class="col">
                    <h5 class=" ">Students</h5>
                    <div style="border-right: 3px solid #d9d9da;">
                        {{-- this is for number of students --}}
                        test
                    </div>
                </div>
                <div class="col">
                    <h5 class=" ">Teachers</h5>
                    <div>
                        {{-- this is for number of teachers --}}
                        test
                    </div>
                </div>
            </div>


        </div>

    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Course</th>
                <th scope="col">Subjects</th>
                <th scope="col">Average Grade</th>
                <th scope="col">Sections</th>
                <th scope="col">Students</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">BSIT</th>
                <td>23</td>
                <td>80.20</td>
                <td>2</td>
                <td>124</td>
            </tr>

    </table>
</div>
@endsection