<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Teacher Account</h3>
        </div>
        <form wire:submit.prevent="create">
            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-4">
                            <h2 class="fw-bold">Teacher Account Creation</h2>
                        </div>
                        <div class="col"></div>
                        <div class="col-3 d-flex justify-content-end">
                            <button wire:click='edit' type="button" class="pt-2 col btn btn-primary">
                                Search & Update
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">

                    <div class="col">

                        <div class="row">
                            <div class="col-1 mt-2">
                                <h5>Assign to: </h5>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">

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
                                    @error('selectedCourse')
                                        <span class="error"
                                            style="color:red; font-weight:bold; ">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                        </div>
                        {{-- enable the one below during edit mode --}}


                    </div>

                </div>


                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">Last Name @error('teacherLastName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherLastNameErrorClear" wire:model="teacherLastName" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">First Name @error('teacherFirstName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherFirstNameErrorClear" wire:model="teacherFirstName" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherMiddleName" />
                        </div>
                    </div>

                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="teacherSuffixName" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col-3 pt-2">
                        <label class="form-label ps-1 text-start ps-1" for="">Gender @error('teacherGender')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input wire:focus="teacherGenderErrorClear" wire:model="teacherGender"
                                class="form-check-input" type="radio" id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input wire:focus="teacherGenderErrorClear" wire:model="teacherGender"
                                class="form-check-input" type="radio" id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>


                    <div class="col-4">
                        <label class="form-label ps-1" for="">Nationality @error('teacherNationality')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="teacherNationalityErrorClear" wire:model="teacherNationality"
                                type="text" id="" class="form-control" />

                        </div>
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Birthdate @error('teacherBirthdate')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="teacherBirthdateErrorClear" wire:model="teacherBirthdate"
                                type="date" id="" class="form-control" />
                            <label class="form-label ps-1" for=""></label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Contact Number @error('teacherContactNumber')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherContactNumberErrorClear" wire:model="teacherContactNumber" />
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email @error('teacherEmail')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control"
                                wire:focus="teacherEmailErrorClear" wire:model="teacherEmail" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address @error('teacherAddress')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherAddressErrorClear" wire:model="teacherAddress" />
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
                            <label class="form-label ps-1" for="">Last Name @error('contactLastName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactLastNameErrorClear" wire:model="contactLastName" />
                            </div>
                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">First Name @error('contactFirstName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactFirstNameErrorClear" wire:model="contactFirstName" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Middle Name @error('contactMiddleName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactMiddleName" />
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
                            <label class="form-label ps-1 text-start ps-1" for="">Gender
                                @error('contactGender')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" wire:model="contactGender"
                                    class="form-check-input" type="radio" id="inlineRadio3" value="male" />
                                <label class="form-check-label" for="inlineRadio3">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" wire:model="contactGender"
                                    class="form-check-input" type="radio" id="inlineRadio4" value="female" />
                                <label class="form-check-label" for="inlineRadio4">Female</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label ps-1" for="">Nationality @error('contactNationality')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactNationalityErrorClear" wire:model="contactNationality"
                                    type="text" id="" class="form-control" />

                            </div>
                        </div>

                        <div class="col"><label class="form-label ps-1" for="">Relationship
                                @error('contactRelationship')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactRelationshipErrorClear" wire:model="contactRelationship" />

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
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactContactNumberErrorClear" wire:model="contactContactNumber" />
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email @error('contactEmail')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control"
                                    wire:focus="contactEmailErrorClear" wire:model="contactEmail" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address @error('contactAddress')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactAddressErrorClear" wire:model="contactAddress" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 d-flex justify-content-end">
                        <button class="p-2 me-3 col-3 btn btn-primary" type="submit">
                            Create Teacher Account
                        </button>
                    </div>

                </div>
            </div>
        </form>
    @else
        {{-- ----------------------------- else edit----------------------------------- --}}



        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Find Teacher Account</h3>
        </div>
        <form wire:submit.prevent="update">
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Teacher </h6>
                            <select wire:change="clearErrors" wire:click="clearErrors"
                                wire:model="selectedTeacher"class="form-select p-2"
                                aria-label="Default select example">
                                <option value="" selected>Teacher id</option>
                                @foreach ($teachers as $teacher)
                                    <option class="option" value="{{ $teacher->id }}">
                                        <a class="dropdown-item" href="#">{{ $teacher->id }}:
                                            {{ $teacher->last_name }}, {{ $teacher->first_name }}
                                            {{ $teacher->middle_name }}
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
                    <div class="col">

                        <div class="row">

                            <div class="col-3">
                                <div class="dropdown">
                                    <h6 class="text-muted text-left ps-1">Assign To @error('selectedCourse')
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

                        </div>
                        {{-- enable the one below during edit mode --}}


                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">Last Name @error('teacherLastName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherLastNameErrorClear" wire:model="teacherLastName" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">First Name @error('teacherFirstName')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherFirstNameErrorClear" wire:model="teacherFirstName" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Middle Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherMiddleName" />
                        </div>
                    </div>

                    <div class="col-2">
                        <label class="form-label ps-1" for="">Pre/Suffix</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="teacherSuffixName" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col-3 pt-2">
                        <label class="form-label ps-1 text-start ps-1" for="">Gender @error('teacherGender')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input wire:focus="teacherGenderErrorClear" wire:model="teacherGender"
                                class="form-check-input" type="radio" id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input wire:focus="teacherGenderErrorClear" wire:model="teacherGender"
                                class="form-check-input" type="radio" id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>


                    <div class="col-4">
                        <label class="form-label ps-1" for="">Nationality @error('teacherNationality')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="teacherNationalityErrorClear" wire:model="teacherNationality"
                                type="text" id="" class="form-control" />

                        </div>
                    </div>

                    <div class="col">
                        <label class="form-label ps-1" for="">Birthdate @error('teacherBirthdate')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="teacherBirthdateErrorClear" wire:model="teacherBirthdate"
                                type="date" id="" class="form-control" />
                            <label class="form-label ps-1" for=""></label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Contact Number @error('teacherContactNumber')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherContactNumberErrorClear" wire:model="teacherContactNumber" />
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="form-label ps-1" for="">Email @error('teacherEmail')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control"
                                wire:focus="teacherEmailErrorClear" wire:model="teacherEmail" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label ps-1" for="">Address @error('teacherAddress')
                                <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="teacherAddressErrorClear" wire:model="teacherAddress" />
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
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactLastNameErrorClear" wire:model="contactLastName" />
                            </div>
                        </div>

                        <div class="col">
                            <label class="form-label ps-1" for="">First Name @error('contactFirstName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactFirstNameErrorClear" wire:model="contactFirstName" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Middle Name @error('contactMiddleName')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactMiddleName" />
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
                            <label class="form-label ps-1 text-start ps-1" for="">Gender
                                @error('contactGender')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" wire:model="contactGender"
                                    class="form-check-input" type="radio" id="inlineRadio3" value="male" />
                                <label class="form-check-label" for="inlineRadio3">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input wire:focus="contactGenderErrorClear" wire:model="contactGender"
                                    class="form-check-input" type="radio" id="inlineRadio4" value="female" />
                                <label class="form-check-label" for="inlineRadio4">Female</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <label class="form-label ps-1" for="">Nationality @error('contactNationality')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input wire:focus="contactNationalityErrorClear" wire:model="contactNationality"
                                    type="text" id="" class="form-control" />

                            </div>
                        </div>

                        <div class="col"><label class="form-label ps-1" for="">Relationship
                                @error('contactRelationship')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactRelationshipErrorClear" wire:model="contactRelationship" />

                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-2">
                            <label class="form-label ps-1" for="">Contact Number
                                @error('contactContactNumber')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactContactNumberErrorClear" wire:model="contactContactNumber" />
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label ps-1" for="">Email @error('contactEmail')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control"
                                    wire:focus="contactEmailErrorClear" wire:model="contactEmail" />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label ps-1" for="">Address @error('contactAddress')
                                    <span class="error" style="color:red; font-weight:bold; ">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:focus="contactAddressErrorClear" wire:model="contactAddress" />
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-end">

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
