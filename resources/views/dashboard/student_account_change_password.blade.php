@extends('dashboard.student_layout')
@section('content')
    <div class="container d-flex justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1 rounded-top align-items-center">
        <div class="row col-5">
            <div class="dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2 text-center">Mr. Ralph</h3>
                </div>
                <div class="row dashboardContainer px-4 pb-4 mt-3 d-flex flex-column align-items-center">
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="email" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Current Password</label>
                    </div>
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="email" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">New Password</label>
                    </div>
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="email" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Confirm New Password</label>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <button class="p-2 me-3 col-6 btn btn-primary ">
                            Update Account Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs content -->
@endsection
