<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Courses</h3>
        </div>
        <form action="{{ route('createcourse') }}" method="POST">
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="name" />
                            <label class="form-label" for="">Course Name (Full)</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" name="abbreviation" />
                            <label class="form-label" for="">Abbreviation</label>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline mb-4 bg-white rounded ">
                                <textarea class="text-area-no-resize form-control " id="" cols="1" max-rows="4" name="description"></textarea>
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

                </div>
            </div>
        </form>
        {{-- <form action="{{ route('indexcourses') }}" method="GET">
            @csrf --}}
            <div class="ps-4 mt-3">
                <div class="col-4">
                    <div class="dropdown"><label class="form-label" for="">View</label>
                        <select class="text-start form-select p-2">
                            {{-- <option value="1">Bachelor in sadasdsa</option>
                        <option value="2">2</option>
                        <option value="3">3</option> --}}
                            {{-- @foreach ($courses as $course)
                                <option>
                                    <a class="dropdown-item" href="#">{{ $course->name }}</a>
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Active Courses</th>
                            <th>Subjects</th>
                            <th>Total Average Grade</th>
                            <th>Sections</th>
                            <th>Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Math 1</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 2</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 3</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 4</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 5</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 6</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>BSIT</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th>Math 8</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                </table>
            </div>
        {{-- </form> --}}
    @else
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
                    <div class="form-outline bg-white rounded p-1">
                        <input type="text" id="" class="form-control" name="name" />
                        <label class="form-label" for="">Course Name (Full)</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline bg-white rounded p-1">
                        <input type="text" id="" class="form-control" name="abbr" />
                        <label class="form-label" for="">Abbreviation</label>
                    </div>
                </div>
                {{-- <form action="{{ route('createcourse') }}" method="POST"> --}}
                {{-- @csrf --}}
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline mb-4 bg-white rounded ">
                            <textarea class="text-area-no-resize form-control " id=""></textarea>
                            <label class="form-label" for="3">Description</label>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button wire:click="create" class="p-2 me-3 col-1 btn btn-primary ">
                            Cancel
                        </button>
                        <button class="p-2 col-3 btn btn-primary ">
                            Update Course Details
                        </button>
                    </div>
                    {{-- </form> --}}
                </div>




            </div>
    @endif
</div>
