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
                <h3 class="fw-bold pt-2">This Semester’s Finals Average</h3>
            </div>
            <div class="row">
                <h1 class="pt-3 fw-bold text-muted">{{$finalsAverage}}</h3>
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
            @foreach ($StudentSubject as $studentsubject)
                    <tr>
                        <th>{{ $Subject::find($studentsubject->subject_id)->subject_code }}</th>
                        <th>{{ $Subject::find($studentsubject->subject_id)->description }}</th>
                        @if (@isset($studentsubject->prelim))
                            <th>{{ $studentsubject->prelim }}</th>
                        @else
                            <th>-</th>
                        @endif

                        @if (@isset($studentsubject->midterm))
                            <th>{{ $studentsubject->prelim }}</th>
                        @else
                            <th>-</th>
                        @endif

                        @if (@isset($studentsubject->final))
                            <th>{{ $studentsubject->prelim }}</th>
                        @else
                            <th>-</th>
                        @endif
                    </tr>
                @endforeach
    </table>


    

</div>
