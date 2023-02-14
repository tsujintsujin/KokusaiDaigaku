<div>
    @if ($window === 'create')
        <div>
            <div class="row dashboardTitleContainer ps-4 rounded-top ">
                <h3 class="fw-bold pt-2">Student Account</h3>
            </div>
            <form wire:submit.prevent="create">
                <div class="row dashboardContainer ps-4 pb-4 pe-4">
                    <div class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-4">
                                <h2 class="fw-bold">Student Account Creation</h2>
                            </div>
                            <div class="col"></div>
                            <div class="col-3 d-flex justify-content-end">
                                <button wire:click='search_update' type="button" class="pt-2 col btn btn-primary">
                                    Search & Update
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-2">

                            <div class="dropdown">
                                <h6 class="text-muted text-left ps-1">Select Course @error('selectedCourse')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </h6>
                                <select wire:focus="courseErrorClear" wire:model="selectedCourse"
                                    class="form-select p-2" aria-label="Default select example">
                                    <option value="" selected>Course</option>
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

                        <div class="col-2">
                            <div class="dropdown">
                                <h6 class="text-muted text-left ps-1">Select Section @error('selectedSection')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </h6>
                                <select wire:click="sectionErrorClear" wire:model="selectedSection"
                                    class="form-select p-2" aria-label="Default select example">
                                    <option value="" selected>Section</option>
                                    @if (!is_null($selectedCourse))
                                        @foreach ($sections as $section)
                                            @if ($section->course_id == $selectedCourse)
                                                <option class="option" value="{{ $section->id }}">
                                                    <a class="dropdown-item" href="#">{{ $section->name }}
                                                    </a>
                                                </option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>

                            </div>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label class="form-label ps-1" for="">Last Name @error('studentLastName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentLastNameErrorClear" wire:model="studentLastName"
                                    type="text" id="lname" class="form-control" />
                            </div>

                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">First Name @error('studentFirstName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentFirstNameErrorClear" wire:model="studentFirstName"
                                    type="text" id="" class="form-control" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Middle Name
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentMiddleNameErrorClear" wire:model="studentMiddleName"
                                    type="text" id="" class="form-control" />
                            </div>

                        </div>
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Pre/Suffix</label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:model="studentSuffixName" type="text" id=""
                                    class="form-control" />
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="hr my-4">
                    </div>

                    <div class="row">
                        <div class="col-3 pt-2">

                            <div>
                                <label class="form-label ps-1" for="">Gender @error('studentGender')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input wire:focus="studentGenderErrorClear" wire:model="studentGender"
                                        class="form-check-input" type="radio" id="inlineRadio1" value="male" />
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
        
                                <div class="form-check form-check-inline">
                                    <input wire:focus="studentGenderErrorClear" wire:model="studentGender"
                                        class="form-check-input" type="radio" id="inlineRadio2" value="female" />
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>


                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">Nationality @error('studentNationality')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentNationalityErrorClear" wire:model="studentNationality"
                                    type="text" id="" class="form-control" />
                            </div>

                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">Birthdate @error('studentBirthdate')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentBirthdateErrorClear" wire:model="studentBirthdate"
                                    type="date" id="" class="form-control" />
                                <label class="form-label ps-1" for=""></label>
                            </div>

                        </div>
                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <label typeclass="form-label ps-1" for="">Contact Number
                                @error('studentContactNumber')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentContactNumberErrorClear" wire:model="studentContactNumber"
                                    type="text" id="" class="form-control" />

                            </div>

                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email @error('studentEmail')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentEmailErrorClear" wire:model="studentEmail" type="email"
                                    id="" class="form-control" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address @error('studentAddress')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="studentAddressErrorClear" wire:model="studentAddress"
                                    type="text" id="" class="form-control" />
                            </div>

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
                                <label class="form-label ps-1" for="">Last Name @error('contactLastName')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="form-outline bg-white rounded p-1">
                                    <input wire:focus="contactLastNameErrorClear" wire:model="contactLastName"
                                        type="text" id="" class="form-control"
                                        wire:model="contactLastName" />
                                </div>

                            </div>
                            <div class="col">
                                <label class="form-label ps-1" for="">First Name @error('contactFirstName')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="form-outline bg-white rounded p-1">
                                    <input wire:focus="contactFirstNameErrorClear" type="text" id=""
                                        class="form-control" wire:model="contactFirstName" />
                                </div>

                            </div>
                            <div class="col">
                                <label class="form-label ps-1" for="">Middle Name
                                </label>
                                <div class="form-outline bg-white rounded p-1">
                                    <input wire:focus="contactMiddleNameErrorClear" type="text" id=""
                                        class="form-control" wire:model="contactMiddleName" />
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
                                <label class="form-label ps-1" for="">Gender @error('contactGender')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input wire:focus="contactGenderErrorClear" class="form-check-input"
                                        type="radio" wire:model="contactGender" id="inlineRadio1"
                                        value="male" />
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input wire:focus="contactGenderErrorClear" class="form-check-input"
                                        type="radio" wire:model="contactGender" id="inlineRadio2"
                                        value="female" />
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <label class="form-label ps-1" for="">Nationality @error('contactNationality')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="form-outline bg-white rounded p-1">
                                    <input wire:focus="contactNationalityErrorClear" type="text" id=""
                                        class="form-control" wire:model="contactNationality" />
                                </div>

                            </div>

                            <div class="col">
                                <label class="form-label ps-1" for="">Relationship
                                    @error('contactRelationship')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="form-outline bg-white rounded p-1">
                                    <input wire:focus="contactRelationshipErrorClear" type="text" id=""
                                        class="form-control" wire:model="contactRelationship" />
                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Contact Number
                                @error('contactContactNumber')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactContactNumberErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactContactNumber" />
                            </div>

                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email @error('contactEmail')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactEmailErrorClear" type="email" id=""
                                    class="form-control" wire:model="contactEmail" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address @error('contactAddress')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactAddressErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactAddress" />
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4 d-flex justify-content-end">
                        <button class="p-2 me-3 col-3 btn btn-primary" type="submit">
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

        <form wire:submit.prevent="update">
            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Student</h6>
                            <select wire:change="clearErrors" wire:model="selectedStudent" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="" selected>Student id</option>
                                @foreach ($students as $student)
                                    <option class="option" value="{{ $student->id }}">
                                        <a class="dropdown-item" href="#">{{ $student->id }}:
                                            {{ $student->last_name }}, {{ $student->first_name }}
                                            {{ $student->first_name }}
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='cancel' type="button" class="pt-2 col btn btn-primary">
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
                                    @foreach ($courses as $course)
                                        @if ($course->id === $student->course_id)
                                            <option selected class="option" value="{{ $course->id }}">
                                                <a class="dropdown-item" href="#">
                                                    current: {{ $course->name }}
                                                </a>
                                            </option>
                                        @elseif ($course->id !== $student->course_id)
                                            <option class="option" value="{{ $course->id }}">
                                                <a class="dropdown-item" href="#">
                                                    {{ $course->name }}
                                                </a>
                                            </option>
                                        @endif
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
                                @if (!is_null($selectedStudent))
                                 
                                    @foreach ($sections as $section)
                                        <option @if ($section->id === $student->section_id) selected @endif class="option"
                                            value="{{ $section->id }}">
                                            <a class="dropdown-item" href="#">
                                                @if ($section->id === $student->section_id)
                                                    current:
                                                @endif{{ $section->name }}
                                            </a>
                                        </option>
                                  
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
                    <div class="col">
                        <label class="form-label ps-1" for="">Last Name @error('studentLastName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentLastNameErrorClear" wire:model="studentLastName" type="text"
                                id="lname" class="form-control" />
                        </div>

                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">First Name @error('studentFirstName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentFirstNameErrorClear" wire:model="studentFirstName"
                                type="text" id="" class="form-control" />
                        </div>

                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentMiddleNameErrorClear" wire:model="studentMiddleName"
                                type="text" id="" class="form-control" />
                        </div>

                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentSuffixName" type="text" id=""
                                class="form-control" />
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col-3 pt-2">

                        <div>
                            <label class="form-label ps-1" for="">Gender @error('studentGender')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input wire:focus="studentGenderErrorClear" wire:model="studentGender"
                                    class="form-check-input" type="radio" id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
    
                            <div class="form-check form-check-inline">
                                <input wire:focus="studentGenderErrorClear" wire:model="studentGender"
                                    class="form-check-input" type="radio" id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>


                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Nationality @error('studentNationality')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentNationalityErrorClear" wire:model="studentNationality"
                                type="text" id="" class="form-control" />
                        </div>

                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Birthdate @error('studentBirthdate')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentBirthdateErrorClear" wire:model="studentBirthdate"
                                type="date" id="" class="form-control" />
                            <label class="form-label ps-1" for=""></label>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <label typeclass="form-label ps-1" for="">Contact Number
                            @error('studentContactNumber')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentContactNumberErrorClear" wire:model="studentContactNumber"
                                type="text" id="" class="form-control" />

                        </div>

                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email @error('studentEmail')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentEmailErrorClear" wire:model="studentEmail" type="email"
                                id="" class="form-control" />
                        </div>

                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address @error('studentAddress')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="studentAddressErrorClear" wire:model="studentAddress" type="text"
                                id="" class="form-control" />
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
                            <label class="form-label ps-1" for="">Last Name @error('contactLastName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactLastNameErrorClear" wire:model="contactLastName"
                                    type="text" id="" class="form-control"
                                    wire:model="contactLastName" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">First Name @error('contactFirstName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactFirstNameErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactFirstName" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Middle Name
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactMiddleNameErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactMiddleName" />
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
                            <label class="form-label ps-1" for="">Gender @error('contactGender')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" class="form-check-input" type="radio"
                                    wire:model="contactGender" id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" class="form-check-input" type="radio"
                                    wire:model="contactGender" id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label ps-1" for="">Nationality @error('contactNationality')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactNationalityErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactNationality" />
                            </div>

                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">Relationship
                                @error('contactRelationship')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactRelationshipErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactRelationship" />
                            </div>

                        </div>
                    </div>



                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Contact Number
                                @error('contactContactNumber')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactContactNumberErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactContactNumber" />
                            </div>

                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email @error('contactEmail')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactEmailErrorClear" type="email" id=""
                                    class="form-control" wire:model="contactEmail" />
                            </div>

                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address @error('contactAddress')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactAddressErrorClear" type="text" id=""
                                    class="form-control" wire:model="contactAddress" />
                            </div>

                        </div>
                    </div>


                    <div class="mt-4 row d-flex justify-content-end">

                        <button class="p-2 me-3 col-1 btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <button wire:click="archive" class="p-2 me-3 col-2 btn btn-primary">
            Archive Account
        </button>
    @endif
</div>
