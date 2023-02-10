@extends('dashboard.admin_layout')
@include('cal_cdn')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col text-center  d-flex flex-column">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="elegant-calencar d-md-flex">
                                    <div class="wrap-header d-flex align-items-center dashboardTitleContainer">
                                        <p id="reset">today</p>
                                        <div id="header" class="p-0">
                                            <div class="pre-button d-flex align-items-center justify-content-center"><i
                                                    class="fa fa-chevron-left"></i></div>
                                            <div class="head-info">
                                                <div class="head-day"></div>
                                                <div class="head-month"></div>
                                            </div>
                                            <div class="next-button d-flex align-items-center justify-content-center"><i
                                                    class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </div>
                                    <div class="calendar-wrap">
                                        <table id="calendar"  class="text-center">
                                            <thead>
                                                <tr>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <th>{{ $course->name }} ({{ $course->abbreviation }})</th>
                            <th>{{$course->Subject->count()}}</th>
                            <th>--</th>
                            <th>{{$course->Section->count()}}</th>
                            <th>{{$course->Student->count()}}</th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>--</th>
                        <th>--</th>
                        <th>--</th>
                        <th>--</th>
                        <th>--</th>
                    </tr>
                @endif
        </table>
    </div>
@endsection
