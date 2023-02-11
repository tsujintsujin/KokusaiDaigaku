<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Courses</h3>
        </div>

        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-6">
                    <form wire:submit.prevent="create">
                        <label class="form-label" for="">Course Name (Full)</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="name" type="text" id="" class="form-control" name="name" />
                        </div>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-2">
                    <label class="form-label" for="">Abbreviation</label>
                    <div class="form-outline bg-white rounded p-1">
                        <input wire:model="abbreviation" wire:focus="abbreviationErrorClear"  type="text" id="" class="form-control"
                            name="abbreviation" />
                    </div>
                    @error('abbreviation')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label" for="3">Description</label>
                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea wire:model="description" class="text-area-no-resize form-control " id="" cols="1"
                                max-rows="4" name="description"></textarea>

                        </div>
                    </div>
                </div>
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

        <div class="ps-4 mt-3">
            <div class="col-4">
                <div class="dropdown"><label class="form-label" for="">View Course</label>
                    <select class="text-start form-select p-2" wire:model="currentCourse">
                        <option value="0" selected disabled>Course</option>
                        {{-- @foreach (App\Models\Course::latest()->get() as $course) --}}

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
                                <th>{{ $courseSubject->subject_code }}</th>
                                <th>--</th>
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
    @elseif($window === 'edit')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Edit Course</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-6">
                    <div class="dropdown">
                        <select class="text-start form-select p-2">
                            <option value="0" selected disabled>Course</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline  rounded">
                        <input type="text" id="" class="form-control bg-white pb-2" name="" disabled
                            value="current abbr" />
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea class="text-area-no-resize form-control" id="" cols="1" max-rows="4" disabled></textarea>
                            <label class="form-label" for="">Description</label>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="fw-bold mt-5">Update Course to:</h2>
            <div class="row mt-4">
                <div class="col-6">
                    <label class="form-label" for="">Course Name (Full)</label>

                    <div class="form-outline bg-white rounded p-1">
                        <input type="text" id="" class="form-control" name="name" />
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label" for="">Abbreviation</label>

                    <div class="form-outline bg-white rounded p-1">
                        <input type="text" id="" class="form-control" name="abbr" />
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label class="form-label" for="3">Description</label>

                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea class="text-area-no-resize form-control " id=""></textarea>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button wire:click="cancel" class="p-2 me-3 col-1 btn btn-primary ">
                            Cancel
                        </button>
                        <button class="p-2 col-3 btn btn-primary ">
                            Update Course Details
                        </button>
                    </div>
                </div>
            </div>
    @endif
</div>
