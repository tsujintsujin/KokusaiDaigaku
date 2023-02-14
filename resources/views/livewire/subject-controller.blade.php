<div>
    {{-- edit --}}
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Subjects</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">

            <div class="row my-4">

                <div class="col-2">
                    <form wire:submit.prevent="create">
                        <div class="dropdown">
                            <label class="form-label" for="">Select Course @error('course_id')
                                    <span class="error" style="color:red;">{{ $message }}</span>
                                @enderror
                            </label>
                            <select wire:model="course_id" class="form-select p-2" aria-label="Default select example">
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
                <div class="col-2">
                    <div class="col">
                        <label class="form-label" for="">Subject Code @error('subject_code')
                                <span class="error mt-none" style="color:red;">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="subject_code" type="text" id="" class="form-control" />

                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <label class="form-label" for="">Year Level @error('year_level')
                                    <span class="error" style="color:red;">{{ $message }}</span>
                                @enderror
                            </label>
                            <select wire:model="year_level" class="text-start form-select p-2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="">Description @error('description')
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </label>
                    <div class="form-outline mb-4 bg-white rounded ">
                        <textarea wire:model="description" class="text-area-no-resize form-control " cols="1" max-rows="4"></textarea>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label class="form-label" for="">Units @error('units')
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </label>

                    <select wire:model="units" class="form-select p-2">
                        <option selected value="">Units</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <button class="p-2 me-3 col-1 btn btn-primary" type="submit">
                    Add
                </button>
                </form>
                <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary">
                    Edit
                </button>
            </div>
        </div>
        <div class="ps-4 mt-3">
            <div class="col-4">
                <div class="dropdown"><label class="form-label ps-1" for="">View Course</label>
                    <select class="text-start form-select p-2" wire:model="currentCourse">
                        <option value="0" selected disabled>Course</option>
                        {{-- @foreach (App\Models\Course::latest()->get() as $course) --}}
                        @if (@isset($Course))
                            @foreach ($Course as $course)
                                <option value="{{ $course->id }}">
                                    <a class="dropdown-item" href="#">{{ $course->name }}
                                        ({{ $course->abbreviation }})
                                    </a>
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Description</th>
                        <th># of Students</th>
                        <th>Average Grade</th>
                    </tr>
                </thead>
                <tbody>


                    @if (@isset($course))
                        @foreach ($course::find($currentCourse)->subject as $courseSubject)
                            @if ($courseSubject->count() > 0)
                                <tr>
                                    <th>{{ $courseSubject->subject_code }}</th>
                                    <th>{{ $courseSubject->description }}</th>
                                    <th>{{ $StudentSubject->where('subject_id', $courseSubject->id)->count() }}</th>
                                    <th>--</th>
                                </tr>
                            @else
                                <tr>
                                    <th></th>
                                    <th>--</th>
                                    <th>--</th>
                                    <th>--</th>
                                </tr>
                            @endif
                        @endforeach
                    @endif
            </table>
        </div>
    @elseif ($window === 'edit')
        {{-- ----------------------------------------------edit-------------------------------------------------- --}}

        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Edit Subject</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row my-4">
                <div class="col-2">
                    <div class="dropdown">
                        <label class="form-label" for="">From Course</label>
                        <select class="text-start form-select p-2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <label class="form-label" for="">Subject Code</label>
                            <select class="text-start form-select p-2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-1">
                    <div class="mb-4 rounded p-1 mt-4 pt-3">
                        <h5 class="form-label">3 Units</h5>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-4 rounded p-1 mt-4 pt-3">
                        <h5 class="form-label">Year Level</h5>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="form-outline mb-4 rounded ">
                        <textarea readonly class="text-area-no-resize form-control">desc here</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label class="form-label" for="">Transfer to Course</label>
                    <select class="text-start form-select p-2">
                        <option value="0">Do not transfer</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="col-2">
                    <div class="col">
                        <label class="form-label" for="">New Subject Code</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="subject_code" type="text" id="" class="form-control" />
                        </div>

                    </div>
                </div>
                <div class="col-1">
                    <div class="col">
                        <div class="dropdown">
                            <label class="form-label" for="">Units</label>
                            <select class="text-start form-select p-2">
                                <option disabled selected value="0">Units</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <label class="form-label" for="">Year Level</label>
                            <select class="text-start form-select p-2">
                                <option selected value="0">No changes</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <label class="form-label" for="">New Description</label>

                    <div class="form-outline mb-4 bg-white rounded p-0">
                        <textarea class="text-area-no-resize form-control " id="" cols="1" max-rows="4"></textarea>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-end">
                <button wire:click="cancel" class="p-2 me-3 col-1 btn btn-primary ">
                    Cancel
                </button>
                <button wire:click="edit" class="p-2 me-3 col-3 btn btn-primary ">
                    Update Records
                </button>
            </div>
        </div>
    @endif
</div>
