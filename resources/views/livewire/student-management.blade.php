<div>
    @if ($window === 'create')
        
    <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Student Account</h3>
        </div>
        <form action="{{ route('createstudent') }}" method="POST">
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                    <div class="col-4">
                        <h2 class="fw-bold">Student Account Creation</h2>

                        {{-- enable the one below during edit mode --}}

                        {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                        <input type="text" id="" class="form-control" />
                        <label class="form-label" for="">Student Name</label>
                    </div> --}}
                    </div>
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='edit' type="button" class="pt-2 me-3 col-8 btn btn-primary">
                            Search & Update
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Course</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                <option value="0">None Selected</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Select Course</h6>
                        <input type="text" name="course_id">
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
                </div> --}}
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Course</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                <option value="0">None Selected</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Section</h6>
                        <input type="text" name="section_id">
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
                </div> --}}
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentSuffixName" />
                            <label class="form-label" for="">Pre/Suffix</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="studentGender" id="inlineRadio1"
                                value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="studentGender" id="inlineRadio2"
                                value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="date" id="" class="form-control" name="studentBirthdate" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                name="studentContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" name="studentEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
            </div>



            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    <div class="col-3 " type="button" data-mdb-toggle="collapse" data-mdb-target="#accord">
                        <h2 class="fw-bold text-muted">Contact Person ▾</h2>
                    </div>
                </div>
                <div class="accordion-collapse collapse" id="accord">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactLastName" />
                                <label class="form-label" for="">Last Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactMiddleName" />
                                <label class="form-label" for="">Middle Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactFirstName" />
                                <label class="form-label" for="">First Name</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactSuffixName" />
                                <label class="form-label" for="">Pre/Suffix</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="hr my-4">
                    </div>
                    <div class="row">
                        <div class="col text-center pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contactGender"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contactGender"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactNationality" />
                                <label class="form-label" for="">Nationality</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactRelationship" />
                                <label class="form-label" for="">Relationship</label>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactContactNumber" />
                                <label class="form-label" for="">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control" name="contactEmail" />
                                <label class="form-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactAddress" />
                                <label class="form-label" for="">Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 d-flex justify-content-end">
                        <button class="p-2 me-3 col-3 btn btn-primary" type="submit">
                            Create Student Account
                        </button>
                    </div>
                </div>
            </div>
        </form>
        


@else  {{------------------------------- else edit-------------------------------------}}



        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Find Student Account</h3>
        </div>
        <form action="{{ route('createstudent') }}" method="POST">
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control" name="" />
                                <label class="form-label" for="">Find Name</label>
                            </div>
                        </div>
                       
                        {{-- <h2 class="fw-bold text-muted">ID: 523643734</h2> --}}

                        {{-- enable the one below during edit mode --}}

                        {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                        <input type="text" id="" class="form-control" />
                        <label class="form-label" for="">Student Name</label>
                    </div> --}}
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='create' type="button" class="pt-2 me-3 col-8 btn btn-primary">
                            Back
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Course</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                <option value="0">No changes</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Select Course</h6>
                        <input type="text" name="course_id">
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
                </div> --}}
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Section</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                <option value="0">No changes</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Section</h6>
                        <input type="text" name="section_id">
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
                </div> --}}
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                name="studentMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                name="studentSuffixName" />
                            <label class="form-label" for="">Pre/Suffix</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="studentGender" id="inlineRadio1"
                                value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="studentGender" id="inlineRadio2"
                                value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                name="studentNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="date" id="" class="form-control" name="studentBirthdate" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                name="studentContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" name="studentEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="studentAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    <div class="col-3" type="button" data-mdb-toggle="collapse" data-mdb-target="#accord2">
                        <h2 class="fw-bold text-muted">Contact Person ▾</h2>
                    </div>
                </div>
                <div class="accordion-collapse collapse" id="accord2">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactLastName" />
                                <label class="form-label" for="">Last Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactMiddleName" />
                                <label class="form-label" for="">Middle Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactFirstName" />
                                <label class="form-label" for="">First Name</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactSuffixName" />
                                <label class="form-label" for="">Pre/Suffix</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="hr my-4">
                    </div>
                    <div class="row">
                        <div class="col text-center pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contactGender"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contactGender"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactNationality" />
                                <label class="form-label" for="">Nationality</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactRelationship" />
                                <label class="form-label" for="">Relationship</label>
                            </div>
                        </div>
                    </div>



                    <div class="row my-4">
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactContactNumber" />
                                <label class="form-label" for="">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control" name="contactEmail" />
                                <label class="form-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    name="contactAddress" />
                                <label class="form-label" for="">Address</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-2 btn btn-primary">
                            Archive Account
                        </button>
                        <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
