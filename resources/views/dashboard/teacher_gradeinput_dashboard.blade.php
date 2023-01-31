@extends('dashboard.teacher_layout')
@section('content')
    <div class="container col-9 py-5 ">
        <div class="row">
            <div class="col-5 text-center dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer rounded-top">
                    <h3 class="fw-bold pt-2">Select School Year</h3>
                </div>
                <div class="row">
                    <div class="dropdown-center p-4">
                        <button class="col-11  py-2 btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Select Year
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="#">S.Y. 2022-2023 First Semester</a></li>
                          <li><a class="dropdown-item mb-2" href="#">S.Y. 2022-2023 Second Semester</a></li>

                          <li><a class="dropdown-item" href="#">S.Y. 2023-2024 First Semester</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">This School Year</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col text-center dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer rounded-top">
                    <h3 class="fw-bold pt-2">This Semester’s Overall Average</h3>
                </div>
                <div class="row">
                    <h1 class="pt-3 fw-bold text-muted">83.5</h3>
                </div>
            </div>
        </div>



        <table class="table mt-5 pt-5">
            <thead>
                <tr>
                    <th scope="col">Subject</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prelim</th>
                    <th scope="col">Midterm</th>
                    <th scope="col">Finals</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Math 1</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 2</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 3</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 4</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 5</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 6</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 7</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">Math 8</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
        </table>


        <div class="mt-5 row d-flex justify-content-end">
            <div class="col-2">
                <h1 class="fw-bold">Highest:</h1>
            </div>
            <div class="col-2">
                <h1 class="fw-bold">Subject</h1>
            </div>
            <div class="col-2">
                <h1 class="fw-bold">Grade</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-2">
                <h1 class="fw-bold text-muted">Lowest:</h1>
            </div>
            <div class="col-2">
                <h1 class="fw-bold text-muted">Subject</h1>
            </div>
            <div class="col-2">
                <h1 class="fw-bold text-muted">Grade</h1>
            </div>
        </div>





    </div>
@endsection
