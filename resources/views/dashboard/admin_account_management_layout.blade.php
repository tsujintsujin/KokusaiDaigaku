@extends('dashboard.admin_layout')
@section('content')
    <div class="container col justify-content-center col-9 mx-5 mt-3 h-auto" style="height: auto;">
        {{-- tab for adding teacher and student --}}
        <div class="d-flex  row" id="courseContainers" style="background-color: #eeefff">
            <div class="col text-center m-0 p-0 h-50">
                <ul class="nav dashboardContainer rounded-top-left-1 h-50">
                    <li class="nav-item fw-bold">
                        <a href="{{ route('account_management_student') }}" class="nav-link" style="color: #fafafc;"
                            aria-current="page" id="studentTab">Students</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a href="{{ route('account_management_teacher') }}" class="nav-link" style="color: #fafafc;"
                            id="studentTab">Teachers</a>
                    </li>
                </ul>
            </div>
            <div class="my-3">
                @yield('student_account')
                @yield('teacher_account')
            </div>

        </div>
    @endsection
