<div>
    <div class="row">
        <div class="col-5 text-center dashboardContainer d-flex flex-column rounded-top">
            <div class="row dashboardTitleContainer rounded-top">
                <h3 class="fw-bold pt-2">Select School Year</h3>
            </div>
            <div class="row">
                <div class="col">
                    <div class="dropdown text-center mt-3">
                        <select wire:model="selectSchoolYear" class="text-start form-select p-2 ">


                            @if (@isset($SchoolYear))
                                @foreach ($SchoolYear as $schoolyear)
                                    <option value="{{ $schoolyear->id }}">
                                        
                                        @switch($schoolyear->semester)
                                        @case(1)
                                        S.Y. {{ $schoolyear->school_year }}, {{ $schoolyear->semester }}st Semester
                                            @break
                                     
                                        @case(2)
                                        S.Y. {{ $schoolyear->school_year }}, {{ $schoolyear->semester }}nd Semester
                                            @break
                                     
                                        @case(3)
                                        S.Y. {{ $schoolyear->school_year }}, {{ $schoolyear->semester }}rd Semester
                                            @break
                                        @default
                                            Default case...
                                    @endswitch

                                    </option>
                                @endforeach
                            @endif







                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col text-center dashboardContainer d-flex flex-column rounded-top">
            <div class="row dashboardTitleContainer rounded-top">
                <h3 class="fw-bold pt-2">This Semester’s Overall Average</h3>
            </div>
            <div class="row">
                <h1 class="pt-3 fw-bold text-muted">83.5</h3>
            </div>
        </div>
    </div>
    <table class="table mt-5 pt-5">
        <thead>
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">Prelim</th>
                <th scope="col">Midterm</th>
                <th scope="col">Finals</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Math 1</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 2</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 3</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 4</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 5</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 6</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 7</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
            <tr>
                <th scope="row">Math 8</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
            </tr>
    </table>


    <div class="mt-5 row d-flex justify-content-end">
        <div class="col-2">
            <h1 class="fw-bold">Highest:</h1>
        </div>
        <div class="col-2">
            <h1 class="fw-bold">Subject</h1>
        </div>
        <div class="col-2">
            <h1 class="fw-bold">Grade</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-end">
        <div class="col-2">
            <h1 class="fw-bold text-muted">Lowest:</h1>
        </div>
        <div class="col-2">
            <h1 class="fw-bold text-muted">Subject</h1>
        </div>
        <div class="col-2">
            <h1 class="fw-bold text-muted">Grade</h1>
        </div>
    </div>

</div>
