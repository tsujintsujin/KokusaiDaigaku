@extends('dashboard.admin_layout')
@include('cal_cdn')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col d-flex flex-column rounded-top">
         


                        <section class="ftco-section">
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
                        </section>
                    </div>
                </div>  





    </div>
@endsection
