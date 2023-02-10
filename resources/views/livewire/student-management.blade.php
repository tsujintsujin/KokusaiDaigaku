<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top ">
            <h3 class="fw-bold pt-2">Student Account</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4 pe-4">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-4">
                        <h2 class="fw-bold">Student Account Creation</h2>
                    </div>
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='edit' type="button" class="pt-2 col btn btn-primary">
                            Search & Update
                        </button>
                    </div>
                </div>
            </div>
            <form wire:submit="create">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">

                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Course</h6>
                            <select wire:focus="courseErrorClear" wire:model="selectedCourse" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="" selected>Course</option>
                                @foreach ($courses as $course)
                                    <option class="option" value="{{ $course->id }}">
                                        <a class="dropdown-item" href="#">{{ $course->name }}
                                            ({{ $course->abbreviation }})
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                            @error('selectedCourse')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Section</h6>
                            <select wire:focus="sectionErrorClear" wire:model="selectedSection" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="0" selected>Section</option>
                                @if (!is_null($selectedCourse))
                                    @foreach ($sections as $section)
                                        <option class="option" value="{{ $section->id }}">
                                            <a class="dropdown-item" href="#">{{ $section->name }}
                                            </a>
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            @error('selectedSection')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">Last Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentLastNameErrorClear" wire:model="studentLastName" type="text" id="lname" class="form-control" />
                        </div>
                        @error('studentLastName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentFirstNameErrorClear" wire:model="studentFirstName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                        @error('studentFirstName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">First Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentMiddleNameErrorClear" wire:model="studentMiddleName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                        @error('studentMiddleName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentSuffixName" type="text" id="" class="form-control" />
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>

                <div class="row">
                    <div class="col text-center pt-2">
                        <div>
                            <div class="form-check form-check-inline">
                                <input  wire:focus="studentGenderErrorClear" wire:model="studentGender" class="form-check-input" type="radio"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:focus="studentGenderErrorClear" class="form-check-input" type="radio"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>

                        @error('studentGender')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentNationalityErrorClear" wire:model="studentNationality" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                        @error('studentNationality')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Birthdate</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentBirthdateErrorClear" wire:model="studentBirthdate" type="date" id=""
                                class="form-control" />
                            <label class="form-label ps-1" for=""></label>
                        </div>
                        @error('studentBirthdate')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Contact Number</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentContactNumberErrorClear" wire:model="studentContactNumber" type="text" id=""
                                class="form-control" />

                        </div>
                        @error('studentContactNumber')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentEmailErrorClear" wire:model="studentEmail" type="email" id="" class="form-control" />
                            <label class="form-label" for="">Email</label>
                        </div>
                        @error('studentEmail')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentAddressErrorClear" wire:model="studentAddress" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Address</label>
                        </div>
                        @error('studentAddress')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>


                </div>
        </div>

        <div class="row dashboardContainer ps-4 pb-4 pe-4">
            <div class="row mt-4">
                <div class="col-3 " type="button">
                    <h2 class="fw-bold text-muted">Contact Person</h2>
                </div>
            </div>

            <div class="" id="accord">
                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">Last Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactLastNameErrorClear" wire:model="contactLastName" type="text" id="" class="form-control"
                                wire:model="contactLastName" />
                        </div>
                        @error('contactLastName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactFirstNameErrorClear" type="text" id="" class="form-control"
                                wire:model="contactFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                        @error('contactFirstName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">First Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactMiddleNameErrorClear" type="text" id="" class="form-control"
                                wire:model="contactMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                        @error('contactMiddleName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input  type="text" id="" class="form-control"
                                wire:model="contactSuffixName" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div>
                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        @error('contactGender')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="col-4">
                        <label class="form-label ps-1" for="">Nationality</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactNationalityErrorClear" type="text" id="" class="form-control"
                                wire:model="contactNationality" />
                        </div>
                        @error('contactNationality')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Relationship</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactRelationshipErrorClear" type="text" id="" class="form-control"
                                wire:model="contactRelationship" />
                            <label class="form-label ps-1" for=""></label>
                        </div>
                        @error('contactRelationship')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>


                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Contact Number</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactContactNumberErrorClear" type="text" id="" class="form-control"
                                wire:model="contactContactNumber" />
                        </div>
                        @error('contactContactNumber')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactEmailErrorClear" type="email" id="" class="form-control" wire:model="contactEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                        @error('contactEmail')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="contactAddressErrorClear" type="text" id="" class="form-control" wire:model="contactAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                        @error('contactAddress')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-4 d-flex justify-content-end">
                    <button class="p-2 me-3 col-3 btn btn-primary">
                        Create Student Account
                    </button>
                </div>

            </div>
            </form>

        </div>
    @elseif ($window === 'edit')
        {{-- ----------------------------- else edit----------------------------------- --}}
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Find Student Account</h3>
        </div>
        <form wire:submit="update">


            @csrf
            <div class="row dashboardContainer ps-4 pb-4 ">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Student</h6>
                            {{-- wire:model="selectedStudent" --}}
                            <select wire:model="selectedStudent" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="0" selected>Student id</option>
                                @foreach ($students as $student)
                                    <option class="option" value="{{ $student->id }}">
                                        <a class="dropdown-item" href="#">{{ $student->id }}:
                                            {{ $student->last_name }}, ({{ $student->first_name }})
                                            ({{ $student->first_name }})
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='back' type="button" class="pt-2 col btn btn-primary">
                            Cancel
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Course</h6>
                            <select wire:model="selectedCourse" class="form-select p-2"
                                aria-label="Default select example">

                                @if (!is_null($selectedStudent))
                                    @foreach ($student_course as $std_course)
                                        <option value="{{ $std_course->id }}" selected>current:
                                            {{ $std_course->name }}</option>
                                        @foreach ($courses as $course)
                                            @if ($course->id !== $std_course->id)
                                                <option class="option" value="{{ $course->id }}">
                                                    <a class="dropdown-item" href="#">
                                                        {{ $course->name }}
                                                    </a>
                                                </option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @elseif (is_null($selectedStudent))
                                    <option selected class="option" value="" selected>
                                        <a class="dropdown-item" href="#">Course
                                        </a>
                                    </option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Section</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                @if (!is_null($selectedCourse))
                                    @foreach ($student_section as $std_sctn)
                                        <option selected class="option" value="{{ $std_sctn->id }}">
                                            <a class="dropdown-item" href="#">current: {{ $std_sctn->name }}
                                            </a>
                                        </option>
                                        @foreach ($sections as $section)
                                            @if ($section->id !== $std_sctn->id)
                                                <option class="option" value="{{ $section->id }}">
                                                    <a class="dropdown-item" href="#">{{ $section->name }}
                                                        ({{ $section->description }})
                                                    </a>
                                                </option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @else
                                    <option selected class="option" value="" selected>
                                        <a class="dropdown-item" href="#">Section
                                        </a>
                                    </option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col"><label class="form-label ps-1" for="">Last Name </label>
                        <div class="form-outline bg-white rounded p-1">
                            @if (!is_null($selectedStudent))
                                @foreach ($student_data as $student)
                                    <input type="text" id="lname" class="form-control"
                                        wire:model="studentLastName" />
                                @endforeach
                            @else
                                <input type="text" id="" class="form-control" value="" />

                            @endif

                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentMiddleName" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">First Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentFirstName" />
                        </div>
                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentSuffixName" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col-3 pt-2">
                        <label class="form-label ps-1 text-start ps-1" for="">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input wire:model="studentGender" class="form-check-input" type="radio"
                                id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input wire:model="studentGender" class="form-check-input" type="radio"
                                id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>


                    <div class="col-4">
                        <label class="form-label ps-1" for="">Nationality</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentNationality" type="text" id=""
                                class="form-control" />

                        </div>
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Birthdate</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentBirthdate" type="date" id=""
                                class="form-control" />
                            <label class="form-label ps-1" for=""></label>
                        </div>
                    </div>




                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Contact Number</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentContactNumber" />
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="studentEmail" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="studentAddress" />
                        </div>
                    </div>


                </div>
            </div>

            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    <div class="col-3" type="button">
                        <h2 class="fw-bold text-muted">Contact Person </h2>
                    </div>
                </div>
                <div class="" id="accord2">
                    <div class="row mt-4">
                        <div class="col">
                            <label class="form-label ps-1" for="">Last Name</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:model="contactLastName" type="text" id=""
                                    class="form-control" wire:model="contactLastName" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Middle Name</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactMiddleName" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">First Name</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactFirstName" />
                            </div>
                        </div>
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Pre/Suffix</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactSuffixName" />
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="hr my-4">
                    </div>
                    <div class="row">
                        <div class="col-3 pt-2">
                            <label class="form-label ps-1 text-start ps-1" for="">Gender</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input wire:model="studentGender" class="form-check-input" type="radio"
                                    wire:model="contactGender" id="inlineRadio3" value="male" />
                                <label class="form-check-label" for="inlineRadio3">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:model="studentGender" class="form-check-input" type="radio"
                                    wire:model="contactGender" id="inlineRadio4" value="female" />
                                <label class="form-check-label" for="inlineRadio4">Female</label>
                            </div>
                        </div>



                        <div class="col-4">
                            <label class="form-label ps-1" for="">Nationality</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactNationality" />
                            </div>
                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">Relationship</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactRelationship" />
                                <label class="form-label ps-1" for=""></label>
                            </div>
                        </div>


                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Contact Number</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactContactNumber" />
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control"
                                    wire:model="contactEmail" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactAddress" />
                            </div>
                        </div>
                    </div>


                    <div class="mt-4 row d-flex justify-content-end">
                        <button class="p-2 me-3 col-2 btn btn-primary">
                            Archive Account
                        </button>
                        <button class="p-2 me-3 col-1 btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
