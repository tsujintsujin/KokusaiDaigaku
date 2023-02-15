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
                    <input wire:model="studentSearch" type="text" id="" class="form-control"
                        name="name" />
                </div>
            </div>
            <div class="col">
                <h2 class="fw-bold mt-4 text-center text-muted">S.Y. 2023-2024</h2>
            </div>
        </div>

        <div class="container">
            <hr class="my-4 me-4">
        </div>
        <div class="row ">
            <div class="col-6">


                <label class="ms-1 fw-bold" for="">Student List:</label>
                <div class="row d-flex mt-4 ms-1 pt-4">


                    <button id="selectAllStudentsList" class="p-2 btn-sm me-3 col-2 btn btn-primary">
                        Select All
                    </button>
                    <button id="removeAllStudentsList" class="p-2 me-3 btn-sm col-2 btn btn-primary ">
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
                            @if (@isset($Student))
                                @foreach ($Student as $student)
                                    <tr>
                                        <th class="d-flex justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input rounded-circle studentCheckBox"
                                                    type="checkbox" wire:model="studentList.{{ $student->id }}"
                                                    wire:change="studentAdd('{{ $student->id }}', '{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}')"
                                                    value="{{ $student->id }}" id="{{ $student->id }}">
                                            </div>
                                        </th>
                                        <th><label class="ms-1" for="{{ $student->id }}">{{ $student->first_name }}
                                                {{ $student->middle_name }} {{ $student->last_name }}</label>
                                        </th>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th>No Student Found
                                    </th>
                                    <th>No Student Found
                                    </th>
                                    <th>No Student Found
                                    </th>
                                </tr>
                            @endif
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
                                <option value="0" selected>Any</option>
                                @if (@isset($Course))
                                    @foreach ($Course as $course)
                                        <option value="{{ $course->id }}">
                                            <a class="dropdown-item" href="#">{{ $course->name }}
                                                ({{ $course->abbreviation }})
                                            </a>
                                        </option>
                                    @endforeach
                                @else
                                    <option>
                                        <a> No Courses Found </a>
                                    </option>
                                @endif

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
                    <div class="col">
                        <label class="ms-1" for="">by Code:</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="subjectSearch" type="text" id="" class="form-control"
                                name="name" />
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">Selected</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (@isset($Subject))
                                @foreach ($Subject as $subject)
                                    <tr>
                                        <th class="d-flex justify-content-center">
                                            <div class="form-check">
                                                <input wire:model="subjectList.{{ $subject->id }}"
                                                    wire:change="subjectAdd('{{ $subject->id }}', '{{ $subject->subject_code }}')"
                                                    class="form-check-input rounded-circle" type="checkbox"
                                                    id="subject_{{ $subject->id }}">
                                            </div>
                                        </th>
                                        <th><label class="ms-1"
                                                for="subject_{{ $subject->id }}">{{ $subject->subject_code }}</label>
                                        </th>
                                        <th><label class="ms-1"
                                                for="subject_{{ $subject->id }}">{{ $subject->description }}</label>
                                        </th>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th>No Subjects Found
                                    </th>
                                    <th>No Subjects Found
                                    </th>
                                    <th>No Subjects Found
                                    </th>
                                </tr>
                            @endif

                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-4 ms-1 pt-4 justify-content-end">
            <button class="p-2 btn-sm me-3 col-1 btn btn-primary" for="1" onClick="window.location.reload();">
                Clear
            </button>
            <button wire:click="addStudentSubjects" class="p-2 me-3 btn-sm col-3 btn btn-primary ">
                Add Subjects to Students Records
            </button>
        </div>
    </div>
</div>
