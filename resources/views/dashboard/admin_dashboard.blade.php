@extends('dashboard.admin_layout')
@section('content')
<div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
    <div class="d-flex row rounded-top" id="dashboardContainers" style="background-color: #eeefff">
        <div class="col-3 text-center m-0 p-0">
            <div>
                <h5 class="dashboardContainer rounded-top-left-1 h-50">Date</h5>
            </div>
            <div class="h-50 d-flex align-items-center justify-content-center">
                <h5 class="nomargin mt-2">Sample</h5>
            </div>
        </div>
        <div class="container col-9 text-center m-0 p-0 ">
            <h5 class="dashboardContainer rounded-top-right-1">Users in the system</h5>
            <div class="row m-0 p-0">
                <div class="col-6">
                    <h5>Students</h5>
                    <div class="h-50 d-flex align-items-center justify-content-center">
                        <h5 class="nomargin mt-2">Sample</h5>
                    </div>
                </div>
                <div class="col-6 m-0">
                    <h5>Teachers</h5>
                    <div class="h-50 d-flex align-items-center justify-content-center">
                        <h5 class="nomargin mt-2">Sample</h5>
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
