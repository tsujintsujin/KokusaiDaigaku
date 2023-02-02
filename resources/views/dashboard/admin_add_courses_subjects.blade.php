@extends('dashboard.admin_layout')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2">Add Course</h3>
                </div>
                <div class="row dashboardContainer ps-4 pb-4 mt-3">
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                <input type="email" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Course Full Name</label>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-outline mb-4 bg-white rounded p-1 pt-2">
                                <input type="email" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-1 btn btn-primary ">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2">Add Subject</h3>
                </div>
                <div class="row dashboardContainer ps-4 pb-4  mt-3"">
                    <div class="row my-4">
                        <div class="col-2">

                            <div class="dropdown">
                                <h6 class="text-muted text-left ps-1">Select Course</h6>

                                <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#" role="button"
                                    id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                                    BSIT
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">BSCS</a></li>
                                    <li><a class="dropdown-item" href="#">BSBA</a></li>
                                    <li><a class="dropdown-item" href="#">BSTM</a></li>
                                </ul>
                            </div>



                        </div>
                        <div class="col-2">
                            <div class="col">
                                <div class="form-outline mb-4 bg-white rounded p-1 pt-2 mt-4">
                                    <input type="email" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Subject Code</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-outline mb-4 bg-white rounded ">
                                <textarea class="text-area-no-resize form-control " id="form4Example3" cols="1" max-rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Description</label>
                            </div>
                        </div>
                    </div>
                    {{-- justify-content-between --}}
                    <div class="row">
                        <div class="col-2">
                            <div class="form-outline mb-4 bg-white rounded p-1 mt-4 pt-2">
                                <input type="number" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Units</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-1 btn btn-primary ">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
