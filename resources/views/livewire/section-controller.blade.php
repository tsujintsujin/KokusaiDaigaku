<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Sections</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">

            <div class="row mt-4">

                <div class="col-3">
                    <label class="form-label ps-1" for="">Select Course</label>
                    <form wire:submit.prevent="create">
                        <select wire:model="course_id" id="selectedCourse" class="text-start form-select p-2 pb-2">
                            <option value="0" selected>Course</option>
                            @foreach ($Course as $course)
                                <option class="option" value="{{ $course->id }}">
                                    <a class="dropdown-item" href="#">{{ $course->name }}
                                        ({{ $course->abbreviation }})
                                    </a>
                                </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <span class="error">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-2">
                    <label class="form-label ps-1" for="">Section Name</label>
                    <div class="form-outline bg-white rounded p-1">
                        <input wire:model="name" type="text" id="" class="form-control" name="name" />
                    </div>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- !!!!!!!!  commented out description of section !!!!!!!!!!!! --}}
                {{-- <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">Description</label>

                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea wire:model="description" class="text-area-no-resize form-control " id="" cols="1"
                                max-rows="4"></textarea>
                        </div>
                    </div>
                </div> --}}
                {{-- !!!!!!!!  commented out description of section !!!!!!!!!!!! --}}
                <div class="row d-flex justify-content-end">
                    <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                        Add
                    </button>
                    </form>
                    <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary ">
                        Edit
                    </button>

                </div>

            </div>
        </div>
        <div class="ps-4 mt-4">
            <div class="row">
                <div class="col-3">
                    <div class="dropdown"><label class="form-label" for="">Course</label>
                        <select wire:model="selectedCourse" class="text-start form-select p-2">
                            <option value="0" selected>Course</option>
                            @foreach ($Course as $course)
                                <option class="option" value="{{ $course->id }}">
                                    <a class="dropdown-item" href="#">{{ $course->name }}
                                        ({{ $course->abbreviation }})
                                    </a>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-3">

                    <div class="dropdown"><label class="form-label" for="">Section</label>
                        <select wire:model="selectedSection" class="text-start form-select p-2">
                            <option value="0" selected>Section</option>
                            @if (@isset($Section))
                                @foreach ($Section as $section)
                                    <option class="option" value="{{ $section->id }}">
                                        <a class="dropdown-item">{{ $section->name }}
                                        </a>
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                </div>

            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Pre - Mid - Fin</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($Student) > 0)
                        @foreach ($Student as $student)
                        <tr>
                            <th>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</th>
                            <th>{{$student->contact_number}}</th>
                            <th>{{$student->email}}</th>
                            <th>{{$student->gender}}</th>
                            <th>-- -- --</th>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>--</th>
                            <th>--</th>
                            <th>--</th>
                            <th>--</th>
                            <th>-- -- --</th>
                        </tr>
                    @endif
            </table>
        </div>
    @else
        {{-- ----------------------else edit -------------------------------------- --}}




        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Edit Section</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-3">
                    <label class="form-label ps-1" for="">From Which Course</label>

                    <div class="dropdown">
                        <select class="text-start form-select p-2" id="">
                            <option value="0" selected disabled>Select Course</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <label class="form-label ps-1" for="">Select Section</label>
                        <select class="text-start form-select p-2" id="">
                            <option value="0" selected disabled>Section</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea disabled class="text-area-no-resize form-control " id="" cols="1" max-rows="4"></textarea>
                            <label class="form-label" for="">section desription here</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row dashboardContainer ps-4 pb-4">
            <h2 class="fw-bold mt-3">Update Section to:</h2>
            <div class="row mt-4">
                <div class="col-3">
                    <div class="dropdown">
                        <label class="form-label ps-1" for="sectioncourse">Transfer other course?</label>
                        <select class="text-start form-select p-2 p-2" id="sectioncourse">
                            <option value="0" selected>Do not transfer</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label ps-1" for="">New Section Name</label>
                    <div class="form-outline bg-white rounded p-1">
                        <input type="text" id="" class="form-control" name="abbr" />

                    </div>
                </div>
                {{-- <form action="{{ route('createcourse') }}" method="POST"> --}}
                {{-- @csrf --}}
                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label ps-1" for="">New Description</label>
                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea class="text-area-no-resize form-control " id="" cols="1" max-rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <button wire:click="create_tab" class="p-2 me-3 col-1 btn btn-primary ">
                        Cancel
                    </button>
                    <button class="p-2 me-3 col-3 btn btn-primary ">
                        Update Course Details
                    </button>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    @endif
</div>
