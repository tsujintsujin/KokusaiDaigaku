<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Sections</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <form wire:submit.prevent="create">
                <div class="row mt-4">

                    <div class="col-3">
                        <label class="form-label ps-1" for="">Select Course</label>

                        <select wire:change="courseErrorClear" wire:focus="courseErrorClear" wire:model="course_id"
                            id="selectedCourse" class="text-start form-select p-2 pb-2">
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
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Section Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:change="sectionErrorClear" wire:focus="sectionErrorClear" wire:model="name" type="text" id="" class="form-control"
                                name="name" />
                        </div>
                        @error('name')
                            <span class="error" style="color:red;">{{ $message }}</span>
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



                    </div>

                </div>
            </form>
            <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary ">
                Edit
            </button>
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
                                <th>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}
                                </th>
                                <th>{{ $student->contact_number }}</th>
                                <th>{{ $student->email }}</th>
                                <th>{{ $student->gender }}</th>
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
                    <label class="form-label ps-1" for="">Course @error('course_id')
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </label>

                    <div class="dropdown">
                        <select  wire:change="courseErrorClear"
                        wire:focus="courseErrorClear" wire:model="selectedCourse" class="text-start form-select p-2">
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
                        <select wire:model="selectedSection"  wire:change="sectionErrorClear" wire:focus="sectionErrorClear" class="text-start form-select p-2">
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
        </div>

        <div class="row dashboardContainer ps-4 pb-4">
            <h2 class="fw-bold mt-3">Update Section to:</h2>
            <form wire:submit.prevent="update">
                <div class="row mt-4">

                    <div class="col-3">
                        <div class="dropdown">
                            <label class="form-label ps-1" for="sectioncourse">Transfer other course?</label>
                            <select class="text-start form-select p-2 p-2" id="sectioncourse"
                                wire:model="selectedCourse" wire:change="courseErrorClear"
                                wire:focus="courseErrorClear"
                                >
                                <option value="0" selected>
                                    <a class="dropdown-item" href="#">Course
                                    </a>
                                </option>
                                @foreach ($Course as $course)
                                    @if ($course->id != $selectedCourse)
                                        <option class="option" value="{{ $course->id }}">
                                            <a class="dropdown-item" href="#">{{ $course->name }}
                                                ({{ $course->abbreviation }})
                                            </a>
                                        </option>
                                    @else{
                                        <option value="{{ $selectedCourse }}" selected>
                                            <a class="dropdown-item" href="#">current: {{ $course->name }}
                                                ({{ $course->abbreviation }})
                                            </a>
                                        </option>

                                        }
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">New Section Name</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input  wire:change="sectionErrorClear" wire:focus="sectionErrorClear" type="text" id="" wire:model="name" value="{{ $name }}"
                                class="form-control" />
                            <input type="text" hidden wire:model="selectedSection" name="" id="">
                        </div>
                    </div>


                    <div class="row d-flex justify-content-end">

                        <button class="p-2 me-3 col-3 btn btn-primary ">
                            Update Course Details
                        </button>
                    </div>

                </div>
            </form>

            <button wire:click="cancel" class="p-2 me-3 col-1 btn btn-primary ">
                Cancel
            </button>
        </div>
    @endif
</div>
