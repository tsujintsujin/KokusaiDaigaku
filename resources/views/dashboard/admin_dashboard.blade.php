@extends('dashboard.admin_layout')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col text-center  d-flex flex-column">
                <div class="col text-end">
                    <h1 class="date-heading fw-bold">{{ $date->monthName }} {{ $date->day }}<br>
                        {{ $date->year }}</h1>
                </div>
                <div class="col text-end">
                </div>
            </div>
            <div class="col text-center dashboardContainer d-flex flex-column">
                <div class="row dashboardTitleContainer">
                    <h3 class="fw-bold pt-2">Users in the System</h3>
                </div>
                <div class="row dashboardContainer mt-5">
                    <div class="col"></div>
                    <div class="col">
                        <h1 class="fw-bold pt-2">{{ $Student->count() }}</h1>
                        <h5 for="">Students</h5>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <h1 class="fw-bold pt-2">{{ $Teacher->count() }}</h1>
                        <h5 for="">Teachers</h5>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Active Courses</th>
                    <th>Subjects</th>
                    <th>Average Grade</th>
                    <th>Sections</th>
                    <th>Students</th>
                </tr>
            </thead>
            <tbody>
            @if ($Course->count() > 0)

            @foreach ($Course as $course)
            <tr>
                <th>{{$course->name}}</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
            </tr>
            @endforeach
    
@else
<tr>
    <th>--</th>
    <td>--</td>
    <td>--</td>
    <td>--</td>
    <td>--</td>
</tr>
@endif
        </table>
    </div>
@endsection
