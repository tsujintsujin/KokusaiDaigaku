@extends('dashboard.teacher_layout')
@section('content')
    <div class="container col-9 py-5 ">
        <div class="row">
            <div class="col-5 text-center dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer rounded-top">
                    <h3 class="fw-bold pt-2">Class Selection</h3>
                </div>
                <div class="row">
                    <div class="dropdown-center p-4">
                        <button class="col-5  py-2 btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Subject
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Math 1</a></li>
                            <li><a class="dropdown-item" href="#">Math 2</a></li>
                            <li><a class="dropdown-item" href="#">Math 3</a></li>
                        </ul>
                        <button class="col-5  py-2 btn btn-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Section
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark"></a></li>
                            <li><a class="dropdown-item" href="#">WD 30</a></li>
                            <li><a class="dropdown-item" href="#">WD 29</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col text-center dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer rounded-top">
                    <h3 class="fw-bold pt-2">Selected:</h3>
                </div>
                <div class="row">
                    <h1 class="pt-3 fw-bold text-muted">Ralph Cadelina</h3>
                </div>
            </div>
        </div>



        <table class="table mt-5 pt-5">
            <thead>
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Prelim</th>
                    <th scope="col">Midterm</th>
                    <th scope="col">Finals</th>
                    <td class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Justin M</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td class="text-end">
                        <button class="btn btn-sm shadow-none btn-primary" style="text-decoration:none;" href="">Edit</button>
                        <button class="btn btn-sm shadow-none btn-danger" href="">Lock</button>

                    </td>
                </tr>
                <tr>
                    <th scope="row">Clarence P</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td class="text-end">
                        <button class="btn btn-sm shadow-none btn-primary" style="text-decoration:none;" href="">Edit</button>
                        <button class="btn btn-sm shadow-none btn-danger" href="">Lock</button>

                    </td>
                </tr>
                <tr>
                    <th scope="row">Ralph C</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td class="text-end">
                        <button class="btn btn-sm shadow-none btn-primary" style="text-decoration:none;" href="">Edit</button>
                        <button class="btn btn-sm shadow-none btn-danger" href="">Lock</button>

                    </td>
                </tr>
        </table>

    </div>
@endsection
