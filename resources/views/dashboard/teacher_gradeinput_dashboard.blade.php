@extends('dashboard.teacher_layout')
@section('content')
    <div class="container col-9 py-5 ">
        <div class="row">
            <div class="col-5 text-center dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer rounded-top">
                    <h3 class="fw-bold pt-2">Class Selection</h3>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="dropdown">
                            <select class="form-select p-2" aria-label="Default select example">
                                <option selected disabled value="1">Course</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown">
                            <select class="form-select p-2" aria-label="Default select example">
                                <option selected disabled value="0">Subject</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
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



        <table class="table mt-5 pt-5  table-striped">
            <thead>
                <th>Name</th>
                <th>Prelim</th>
                <th>Midterm</th>
                <th>Finals</th>

                <tr>
            <tbody>
                <tr>
                    <td class="pt-3">Justin Masiga</td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="prelim" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="midterm" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="finals" />
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                       
                        <button class="btn btn-sm shadow-none btn-primary" href="">Update</button>
                    </td>
                </tr>
                <tr>
                    <td class="pt-3">Clarence P</td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="prelim" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="midterm" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="finals" />
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                       
                        <button class="btn btn-sm shadow-none btn-primary" href="">Update</button>
                    </td>
                </tr>
                <tr>
                    <td class="pt-3">Ralph C</td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="prelim" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="midterm" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-2  text-center">
                            <div class=" border-0">
                                <input placeholder="--" type="text" id="" class="form-control  text-center" name="finals" />
                            </div>
                        </div>
                    </td>
                    <td class="text-end">
                       
                        <button class="btn btn-sm shadow-none btn-primary" href="">Update</button>
                    </td>
                </tr>
        </table>

    </div>
@endsection
