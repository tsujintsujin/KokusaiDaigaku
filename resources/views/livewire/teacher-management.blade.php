<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Teacher Account</h3>
        </div>

        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-4">


                    <h2 class="fw-bold">Teacher Account Creation</h2>

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
            <form wire:submit.prevent="create">
                <div class="row mt-4">

                    <div class="col">

                        <div class="row">
                            <div class="col-1 mt-2">
                                <h5>Assigned to: </h5>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <select wire:model="selectedCourse" class="form-select p-2"
                                        aria-label="Default select example">
                                        <option value="0" selected>Course</option>
                                        @foreach ($courses as $course)
                                            <option class="option" value="{{ $course->id }}">
                                                <a class="dropdown-item" href="#">{{ $course->name }}
                                                    ({{ $course->abbreviation }})
                                                </a>
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col pt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"  type="radio" wire:model="teacherType"
                                        id="inlineRadio1" value="male" />
                                    <label class="form-check-label" for="inlineRadio1">Full-time</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model="teacherType"
                                        id="inlineRadio2" value="female" />
                                    <label class="form-check-label" for="inlineRadio2">Part-time</label>
                                </div>
                            </div>
                        </div>
                        {{-- enable the one below during edit mode --}}

                        {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                        <input type="text" id="" class="form-control" />
                        <label class="form-label" for="">teacher Name</label>
                    </div> --}}
                    </div>

                </div>


                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherSuffixName" />
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
                            <input class="form-check-input" type="radio" wire:model="teacherGender" id="inlineRadio1"
                                value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="teacherGender" id="inlineRadio2"
                                value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="date" id="" class="form-control"
                                wire:model="teacherBirthdate" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="teacherEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
        </div>



        <div class="row dashboardContainer ps-4 pb-4 pe-4">
            <div class="row mt-4">
                {{-- data-mdb-toggle="collapse" data-mdb-target="#accord" --}}
                <div class="col-3 " type="button">
                    <h2 class="fw-bold text-muted">Contact Person </h2>
                </div>
            </div>
            {{-- accordion-collapse collapse --}}
            <div class="" id="accord">
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactSuffixName" />
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
                            <input class="form-check-input" type="radio" wire:model="contactGender"
                                id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="contactGender"
                                id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactRelationship" />
                            <label class="form-label" for="">Relationship</label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="contactEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="contactAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 d-flex justify-content-end">
                    <button class="p-2 me-3 col-3 btn btn-primary" type="submit">
                        Create Teacher Account
                    </button>
                </div>
            </form>
            </div>
        </div>
  
    @else
        {{-- ----------------------------- else edit----------------------------------- --}}




        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Find Teacher Account</h3>
        </div>
        <form action="{{ route('createteacher') }}" method="POST">
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="" />
                            <label class="form-label" for="">Name</label>
                        </div>
                    </div>

                    {{-- <h2 class="fw-bold text-muted">ID: 523643734</h2> --}}

                    {{-- enable the one below during edit mode --}}

                    {{-- <div class="form-outline bg-white rounded p-1 pt-2">
                        <input type="text" id="" class="form-control" />
                        <label class="form-label" for="">teacher Name</label>
                    </div> --}}
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='create' type="button" class="pt-2 me-3 col-8 btn btn-primary">
                            Back
                        </button>
                    </div>
                </div>
                <div class="row mt-3">

                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Select Course</h6>
                        <input type="text" wire:model="course_id">
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

                    {{-- <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">Section</h6>
                        <input type="text" wire:model="section_id">
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
                            <input type="text" id="" class="form-control"
                                wire:model="teacherLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherSuffixName" />
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
                            <input class="form-check-input" type="radio" wire:model="teacherGender"
                                id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="teacherGender"
                                id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="date" id="" class="form-control"
                                wire:model="teacherBirthdate" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="teacherEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    {{-- data-mdb-toggle="collapse" data-mdb-target="#accord2" --}}
                    <div class="col-3" type="button">
                        <h2 class="fw-bold text-muted">Contact Person </h2>
                    </div>
                </div>
                {{-- accordion-collapse collapse --}}
                <div class="" id="accord2">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactLastName" />
                                <label class="form-label" for="">Last Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactMiddleName" />
                                <label class="form-label" for="">Middle Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactFirstName" />
                                <label class="form-label" for="">First Name</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactSuffixName" />
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
                                <input class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactNationality" />
                                <label class="form-label" for="">Nationality</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactRelationship" />
                                <label class="form-label" for="">Relationship</label>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactContactNumber" />
                                <label class="form-label" for="">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control"
                                    wire:model="contactEmail" />
                                <label class="form-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactAddress" />
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
