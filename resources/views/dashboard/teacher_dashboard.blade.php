@extends('dashboard.teacher_layout')
@include('cal_css')
@include('cal_js')
@section('content')
 
<div class="container-fluid justify-content-center p-5  ms-3 me-4 rounded-top-left-1 rounded-top-right-1" id="contentM">
    <div class="row">
        <div class="col text-center d-flex flex-column ">
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
        </div>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Description</th>
                <th>Prelim</th>
                <th>Midterm</th>
                <th>Finals</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Subject as $subject)
            <tr>
                <th>{{$subject->subject_code}}</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>

            @endforeach


            

            
    </table>
</div>



@endsection