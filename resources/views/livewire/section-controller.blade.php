<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Sections</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <form wire:submit.prevent="create">
                <div class="row mt-4">
                    <div class="col-3">
                        <select wire:model="course_id" id="selectedCourse" class="text-start form-select p-2 pb-2">
                            <option value="0" selected>Course</option>
                            @foreach ($courses as $course)
                                <option class="option" value="{{ $course->id }}">
                                    <a class="dropdown-item" href="#">{{ $course->name }}
                                        ({{ $course->abbreviation }})
                                    </a>
                                </option>
                            @endforeach
                        </select>
                        {{-- <input wire:model="course_id" id="course" > --}}
                        {{-- this script is for getting the value of selected courses and put in the hidden input field --}}
                        {{-- <script>
                            let select = document.querySelector("#selectedCourse");
                            let input = document.querySelector("#course");

                            select.addEventListener("change", function() {
                                input.value = select.value;
                            });
                        </script> --}}
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="name" type="text" id="" class="form-control"
                                name="name" />
                            <label class="form-label" for="">Section Name</label>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline mb-4 bg-white rounded ">
                                <textarea wire:model="description" class="text-area-no-resize form-control " id="" cols="1"
                                    max-rows="4"></textarea>
                                <label class="form-label" for="3">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-1 btn btn-primary " type="submit">
                            Add
                        </button>
                        <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary ">
                            Edit
                        </button>
                    </div>
            </form>
        </div>
</div>
<div class="ps-4 mt-4">
    <div class="row">
        <div class="col-3">
            <div class="dropdown"><label class="form-label" for="">Course</label>
                <select wire:model="selectedCourse" class="text-start form-select p-2">
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

        <div class="col-3">

            <div class="dropdown"><label class="form-label" for="">Section</label>
                <select class="text-start form-select p-2">
                    <option value="0" selected disabled>Section</option>
                    {{-- @foreach (App\Models\Section::latest()->get() as $section)
                            <option class="option" value="{{ $section->id }}">
                                <a class="dropdown-item" href="#">{{ $section->name }}
                                    ({{ $section->description }})
                                </a>
                            </option>
                        @endforeach --}}
                    @if (!is_null($selectedCourse))
                        @foreach ($sections as $section)
                            <option class="option" value="{{ $section->id }}">
                                <a class="dropdown-item" href="#">{{ $section->name }}
                                    ({{ $section->description }})
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
            <tr>
                <th>Math 1</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>Math 2</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>

            </tr>
            <tr>
                <th>Math 3</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>Math 4</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>Math 5</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>Math 6</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>BSIT</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
            <tr>
                <th>Math 8</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>-- -- --</td>
            </tr>
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
            <div class="dropdown">
                <label for="sectioncourse">From which course</label>
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
                <label for="">Select Section</label>
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
                    <label class="form-label" for="">section desription</label>
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
                <label for="sectioncourse">Transfer other course?</label>
                <select class="text-start form-select p-2 p-2" id="sectioncourse">
                    <option value="0" selected>Do not transfer</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div class="form-outline bg-white rounded p-1 mt-4">
                <input type="text" id="" class="form-control" name="abbr" />
                <label class="form-label" for="">New Section Name</label>
            </div>
        </div>
        {{-- <form action="{{ route('createcourse') }}" method="POST"> --}}
        {{-- @csrf --}}
        <div class="row mt-4">
            <div class="col">
                <div class="form-outline mb-4 bg-white rounded ">
                    <textarea class="text-area-no-resize form-control " id="" cols="1" max-rows="4"></textarea>
                    <label class="form-label" for="3">New Description</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <button wire:click="create" class="p-2 me-3 col-1 btn btn-primary ">
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
