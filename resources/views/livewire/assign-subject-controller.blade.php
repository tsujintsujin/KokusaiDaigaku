<div>
    <div class="row dashboardTitleContainer ps-4 rounded-top">
        <h3 class="fw-bold pt-2">Student Subject Assignment</h3>
    </div>
    <div class="row dashboardContainer ps-4 pb-4">
        <div class="row mt-4 col-6">
            <div class="col">
                <div class="dropdown">
                    <label class="ms-1" for="">Course:</label>
                    <select wire:model="selectedCourse" class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        @foreach ($Course as $course)
                            <option value="{{ $course->id }}">
                                <a class="dropdown-item" href="#">{{ $course->name }}
                                    ({{ $course->abbreviation }})
                                </a>
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- dito muna to, gawa pa logic para sa year level --}}

            {{-- <div class="col-3">
                <div class="dropdown">
                    <label class="ms-1" for="">by Year Level:</label>
                    <select class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="3">4th Year</option>
                        <option value="3">5th Year</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-4">
                <div class="dropdown">
                    <label class="ms-1" for="">by Section:</label>
                    <select wire:model="selectedSection" class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        @foreach ($Section as $section)
                            <option class="option" value="{{ $section->id }}">
                                <a class="dropdown-item" href="#">{{ $section->name }}
                                </a>
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-4 col-6">
            <div class="col-6">
                <label class="ms-1" for="">by Name:</label>
                <div class="form-outline bg-white rounded p-1">
                    <input type="text" id="" class="form-control" name="name" />
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="my-4 me-4">
        </div>
        <div class="row ">
            <div class="col-6">


                <label class="ms-1 fw-bold" for="">Student List:</label>
                <div class="row d-flex mt-4 ms-1 pt-4">
                    <button class="p-2 btn-sm me-3 col-2 btn btn-primary" for="1">
                        Select All
                    </button>
                    <button class="p-2 me-3 btn-sm col-2 btn btn-primary ">
                        Remove All
                    </button>
                </div>
                <div class="col-7">



                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">Selected</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Student as $student)
                                <tr>
                                    <th class="d-flex justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-circle " type="checkbox" 
                                                wire:change="studentAdd('{{ $student->id }}', '{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}')" 
                                                value="{{ $student->id }}" id="{{ $student->id }}">
                                        </div>
                                    </th>
                                    <th><label class="ms-1" for="{{ $student->id }}">{{ $student->first_name }}
                                            {{ $student->middle_name }} {{ $student->last_name }}</label>
                                    </th>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>


            <div class="col-6">
                <label class="ms-1 fw-bold" for="">Subject List:</label>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="dropdown">
                            <label class="ms-1" for="">From Course:</label>
                            <select wire:model="fromCourse" class="text-start form-select p-2">
                                {{-- lets seelect where to get the subject course, for further development when considering irregulars na kukuha
                                    ng subject from ibang course for a different schedule --}}
                                <option value="0" selected>Default</option>
                                @foreach ($Course as $course)
                                    <option value="{{ $course->id }}">
                                        <a class="dropdown-item" href="#">{{ $course->name }}
                                            ({{ $course->abbreviation }})
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="dropdown">
                            <label class="ms-1" for="">From Year Level:</label>
                            <select wire:model="yearSelection" class="text-start form-select p-2">
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                                <option value="5">5th Year</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-7">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">Selected</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input value="English" wire:change="subjectAdd('1', 'English')"
                                            class="form-check-input rounded-circle" type="checkbox"
                                            id="English">
                                    </div>
                                </th>
                                <th><label class="ms-1" for="English">English</label>
                                </th>
                            </tr>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input value="Math" wire:change="subjectAdd('2', 'Math')"
                                            class="form-check-input rounded-circle" type="checkbox"
                                            id="Math">
                                    </div>
                                </th>
                                <th><label  class="ms-1" for="Math">Math</label></th>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-4 ms-1 pt-4 justify-content-end">
            <button wire:click="showCont" class="p-2 btn-sm me-3 col-1 btn btn-warning" for="1">
                show
            </button>
            <button class="p-2 btn-sm me-3 col-1 btn btn-primary" for="1">
                Cancel
            </button>
            <button class="p-2 me-3 btn-sm col-3 btn btn-primary ">
                Add Subjects to Students Record
            </button>
        </div>
    </div>
</div>
