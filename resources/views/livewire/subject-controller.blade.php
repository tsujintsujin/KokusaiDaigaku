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
                            <h6 class="text-muted text-left ps-1">Select Course</h6>
                            <select wire:model="course_id" class="form-select p-2" aria-label="Default select example">
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
                <div class="col-2">
                    <div class="col">
                        <div class="form-outline mb-4 bg-white rounded p-1 pt-2 mt-4">
                            <input wire:model="subject_code" type="text" id="" class="form-control" >
                            <label class="form-label mt-1" for="">Subject Code</label>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Year Level</h6>
                            <select wire:model="year_level" class="text-start form-select p-2">
                                <option selected value="not required">Not Required</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-3">
                    <label class="form-label text-muted" for="">Semester: </label>
                    <div class="col text-center pt-1 ps-3 justify-content-start d-flex">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="semesterRadio" id="semesterRadio1"
                                value="1" />
                            <label class="form-check-label" for="inlineRadio1">1st</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="semesterRadio" id="semesterRadio2"
                                value="2" />
                            <label class="form-check-label" for="inlineRadio2">2nd</label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-outline mb-4 bg-white rounded ">
                        <textarea wire:model="description" class="text-area-no-resize form-control "  cols="1" max-rows="4"></textarea>
                        <label class="form-label" for="3">Description</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <select wire:model="units" class="form-select p-2">
                        <option  disabled value="0">Units</option>
                        <option selected value="1">1</option>
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
                <div class="dropdown"><label class="form-label" for="">Viewing Course</label>
                    <select class="text-start form-select p-2">
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
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Subject Code</th>
                        <th>Description</th> {{-- hover to view --}}
                        <th>Average Grade of Students</th>
                        <th>Total Students</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Math 1</th>
                        <td>--</td> {{-- class="text-truncate"  data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Description sample" --}}
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Math 2</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Math 3</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Math 4</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Math 5</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <th>Math 6</th>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
            </table>
        </div>
    @else
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Edit Subject</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row my-4">
                <div class="col-2">
                    <div class="dropdown">
                        <h6 class="text-muted text-left ps-1">From Course</h6>
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
                            <h6 class="text-muted text-left ps-1">Subject Code</h6>
                            <select class="text-start form-select p-2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-1">
                    <div class="mb-4 rounded p-1 mt-4 pt-2">
                        <h5 class="form-label">3 Units</h5>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-4 rounded p-1 mt-4 pt-2">
                        <h5 class="form-label">Year Level</h5>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="form-outline mb-4 rounded ">
                        <textarea readonly class="text-area-no-resize form-control">asdasdsa</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h6 class="text-muted text-left ps-1">Transfer to Course</h6>
                    <select class="text-start form-select p-2">
                        <option value="0">Do not transfer</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <div class="col pt-1">
                                <div class="form-outline bg-white rounded mt-4">
                                    <input type="text" id="" class="form-control p-2">
                                    <label class="form-label" for="">New Subject Code</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 pt-1">
                    <select class="text-start mt-4 form-select p-2">
                        <option disabled selected value="0">Units</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-2">
                    <div class="col">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Year Level</h6>
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
                    <div class="form-outline mb-4 bg-white rounded p-0">
                        <textarea class="text-area-no-resize form-control " id="" cols="1" max-rows="4"></textarea>
                        <label class="form-label" for="">New Description</label>
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
