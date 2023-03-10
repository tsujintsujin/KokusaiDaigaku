@extends('dashboard.admin_layout')
@include('cal_css')
@section('content')
<div class="container-fluid justify-content-center p-5   ms-3 me-4 rounded-top-left-1 rounded-top-right-1" id="contentM">
        <div class="row d-flex">
            <div class="col-7 dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2">Requests For Password Reset</h3>
                </div>
                <div class="row  ps-4 pb-4 mt-3">
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th class="col-4">ID</th>
                                <th class="col-3">Name</th>
                                <th class="col text-center d-flex align-items-center">
                                    <div class="col-4"></div>
                                    <div class="col">view</div>
                                    <div class="col">reset</div>
                                    <div class="col">ignore</div>
                                    <div class="col-3"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>543654754</th>
                                <th>Justin M</th>
                                <th class="col text-center d-flex align-items-center">
                                    <div class="col-4"></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/view_active.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/reset.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/ignore.png') }}"
                                                alt=""></button></div>
                                    <div class="col-3"></div>
                                </th>
                            </tr>
                            <tr>
                                <th>543654711</th>
                                <th>Ralph C</th>
                                <th class="col text-center d-flex align-items-center">
                                    <div class="col-4"></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/view.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/reset.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/ignore.png') }}"
                                                alt=""></button></div>
                                    <div class="col-3"></div>
                                </th>
                            </tr>
                            <tr>
                                <th>543624711</th>
                                <th>Clarence P</th>
                                <th class="col text-center d-flex align-items-center">
                                    <div class="col-4"></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/view.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/reset.png') }}"
                                                alt=""></button></div>
                                    <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img
                                                class="vri-icon" src="{{ asset('image/ignore.png') }}"
                                                alt=""></button></div>
                                    <div class="col-3"></div>
                                </th>
                            </tr>
                    </table>
                </div>
            </div>

            <div class="col ps-5 ms-5">
                <h1 class="fw-bold">Justin Masiga</h1>
                <h5>Bachelor in Science Major
                    in Computer Science</h5>
                <h5>Section: WD 29</h5>
                <div class="mt-5">
                    <h5>Nationality</h5>
                    <h5>Gender</h5>
                    <h5>Phone Number</h5>
                    <h5>Birthdate</h5>
                    <h5>Email</h5>
                    <h5>Address</h5>
                    <h2 class="fw-bold mt-5">Contact Person</h2>
                    <h3>Jecery Masiga</h3>
                    <h5>Wife</h5>
                    <div class="mt-5">
                        <h5>Nationality</h5>
                        <h5>Gender</h5>
                        <h5>Phone Number</h5>
                        <h5>Address</h5>
                    </div>
                </div>

            </div>
        </div>
    @endsection
