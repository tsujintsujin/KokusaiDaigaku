<div class="row d-flex">
    <div class="col-7 dashboardContainer d-flex flex-column rounded-top">
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Pre Enrolled Students</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4 mt-3">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="col-4">ID</th>
                        <th class="col-3">Name</th>
                        <th class="col text-center d-flex align-items-center">
                            <div class="col-4"></div>
                            <div class="col">view</div>
                            <div class="col">ignore</div>
                            <div class="col">print</div>
                            <div class="col-3"></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student )
                    <tr>
                        <th>{{ $student->id }}</th>
                        <th>{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }} {{ $student->suffix_name }}</th>
                        <th class="col text-center d-flex align-items-center">
                            <div class="col-4"></div>
                            {{-- wire:model="selectedStudent"  --}}
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none" wire:click="viewStudentSelected({{ $student->id }})" ><img class="vri-icon"
                                        src="{{ asset('image/view_active.png') }}" alt=""></button></div>

                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/ignore.png') }}" alt=""></button></div>
                            <div class="col">
                                {{-- target="_blank" --}} 
                                {{-- href="{{ route('generatePDF',[$student->]) }}" --}}
                                <a  class="btn p-0 mx-2 border-0 shadow-none" ><img class="vri-icon"
                                        src="{{ asset('image/printer.png') }}" alt=""></a></div>
                            <div class="col-3"></div>
                        </th>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <th>543654711</th>
                        <th>Ralph C</th>
                        <th class="col text-center d-flex align-items-center">
                            <div class="col-4"></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/view.png') }}" alt=""></button></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/ignore.png') }}" alt=""></button></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/printer.png') }}" alt=""></button></div>
                            <div class="col-3"></div>
                        </th>
                    </tr>
                    <tr>
                        <th>543624711</th>
                        <th>Clarence P</th>
                        <th class="col text-center d-flex align-items-center">
                            <div class="col-4"></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/view.png') }}" alt=""></button></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/ignore.png') }}" alt=""></button></div>
                            <div class="col"><button class="btn p-0 mx-2 border-0 shadow-none"><img class="vri-icon"
                                        src="{{ asset('image/printer.png') }}" alt=""></button></div>
                            <div class="col-3"></div>
                        </th>
                    </tr> --}}
            </table>
        </div>
    </div>
    <div class="col ps-5 ms-5">
        <h1 class="fw-bold">{{ $studentLastName }}, {{ $studentFirstName }} {{ $studentMiddleName }} {{ $studentSuffixName }}</h1>
        <h5>Enrolling For:</h5>
        <h5>{{ $studentCourse }}</h5>
        <div class="mt-5">
            <h5>Nationality: <span style="color:blue;">{{ $studentNationality }}</span> </h5>
            <h5>Gender: <span style="color:blue;">{{ $studentGender }}</span></h5>
            <h5>Birthdate: <span style="color:blue;">{{ $studentBirthdate }}</span></h5>
            <h5>Phone Number: <span style="color:blue;">{{ $studentContactNumber }}</span></h5>
            <h5>Email: <span style="color:blue;">{{ $studentEmail }}</span></h5>
            <h5>Address: <span style="color:blue;">{{ $studentAddress }}</span></h5>
            {{-- href="{{ route('generate-pdf')}}"  --}}
            {{-- wire:click="generatePDF"  --}}
            {{-- href="{{ route('generate-pdf', ['id' => $selectedStudent])}}" --}}
            {{-- wire:click="generatePDF({{ $selectedStudent }})" --}}
            {{-- target="_blank"  --}}
            <h5>Download PDF:  <a  class="btn p-0 mx-2 border-0 shadow-none"  wire:click="generatePDF({{ $selectedStudent }})"  ><img class="vri-icon"
                src="data:image/png;base64,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" alt=""></a></div>
       </h5>
           
        </div>
        </div>
</div>
