<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Courses</h3>
        </div>
       
        <div class="row dashboardContainer ps-4 pb-4">
            
      
            <form wire:submit.prevent="create">
                <div class="row mt-4">
                    <div class="col-6">

                        <label class="form-label" for="">Course Name (Full)</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="courseErrorClear" wire:model="name" type="text" id=""
                                class="form-control" name="name" />
                        </div>
                        @error('name')
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label class="form-label ps-1" for="">Abbreviation</label>
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:focus="abbreviationErrorClear" wire:model="abbreviation"
                                wire:focus="abbreviationErrorClear" type="text" id="" class="form-control"
                                name="abbreviation" />
                        </div>
                        @error('abbreviation')
                            <span class="error" class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label class="form-label" for="3">Description</label>
                            <div class="form-outline mb-4 bg-white rounded ">
                                <textarea wire:focus="descriptionErrorClear" wire:model="description" class="text-area-no-resize form-control "
                                    id="" cols="1" max-rows="4" name="description"></textarea>

                            </div>
                            @error('description')
                                <span class="error" class="error" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                            Add
                        </button>

                    </div>

                </div>
            </form>
            <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary">
                Edit
            </button>
        </div>

        <div class="ps-4 mt-3">
            <div class="col-4">
                <div class="dropdown"><label class="form-label ps-1" for="">View Course</label>
                    <select class="text-start form-select p-2" wire:focus="" wire:model="currentCourse">
                        <option value="0" selected>Course</option>
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
    @elseif($window === 'edit')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Edit Course</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-6">
                    <div class="dropdown">
                        <select class="text-start form-select p-2" wire:focus="" wire:model="selectedCourse">
                            <option value="">
                                <a class="dropdown-item" href="#" value="0" selected>
                                    Select Course
                                </a>
                            </option>
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
                <button wire:click="cancel" class="p-2 me-3 col-1 btn btn-primary ">
                    Cancel
                </button>
            </div>
            <form wire:submit.prevent="update">
                <h2 class="fw-bold mt-5">Update Course to:</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <label class="form-label ps-1" for="">Course Name (Full)</label>

                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:focus="courseErrorClear"
                                wire:model="name" name="name" />
                        </div>
                        @error('name')
                            <span class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label class="form-label" for="">Abbreviation</label>

                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:focus="abbreviationErrorClear" wire:model="abbreviation" name="abbr" />
                        </div>
                        @error('abbreviation')
                            <span class="error" class="error" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label class="form-label ps-" for="3">Description</label>

                            <div class="form-outline mb-4 bg-white rounded ">
                                <textarea class="text-area-no-resize form-control " wire:focus="descriptionErrorClear" wire:model="description"
                                    id=""></textarea>
                            </div>
                            @error('description')
                                <span class="error" class="error" style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row d-flex justify-content-end">

                            <button class="p-2 col-3 btn btn-primary ">
                                Update Course Details
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    @endif
</div>
