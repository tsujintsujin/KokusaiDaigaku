@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center mt-5 mb-5">
            <div class="col text-title-lines ">
            </div>
            <div class="col text-center">
                <h1 class="fw-bold color-title">STUDENT SERVICES</h1>
            </div>
            <div class="col text-title-lines">
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col justify-content">
                <h1 class="fw-bold color-title">SCHOLARSHIPS<span><img class="yellow-arrow ms-3 mb-2"
                            src="{{ asset('image/right_arrow.png') }}" alt=""></span></h1>
                <h5 class="fw-bold color-title">ACADEMIC SCHOLARSHIPS AND GRANT-IN-AID</h5>
                <p>The College acknowledges top-performing students
                    every semester who are granted discounts on their
                    tuition fees. In order to become a Dean's Lister,
                    students must carry at least 18 units every semester
                    and obtain the required Weighted Percentage
                    Average (WPA). Students who are financially
                    challenged but are excellent in academics
                    are also recommended for foster parenting by
                    Japanese Nationals.</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col mt-5">
                <h5 class="mx-4 color-title fw-bold">Other Scholarships Offered</h5>
                <ul class="justify-content">
                    <li>Board of Trustees/Employee Tuition Fee Discount</li>
                    <li>High School Graduates with Academic Honors</li>
                    <li>Academic Scholarship (Dean’s Lister)</li>
                    <li>MKD Grant-in-Aid Program</li>
                    <li>PNJKIS Alumni Grant</li>
                    <li>Descendant Discount</li>
                    <li>MKD SATOGO Program</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="text-end">
            <h1 class="fw-bold color-title"><span><img class="yellow-arrow me-3 mb-2"
                        src="{{ asset('image/left_arrow.png') }}" alt=""></span>LINKAGES</h1>
            <h5 class="fw-bold color-title">Partner Institutions of MKD in Japan</h5>
        </div>
        <div class="mb-5">
            <p class="mt-5">The Academic Partnership Agreements with the following Japanese colleges and corporations were
                forged to cooperate in the spirit of equality and mutual benefit, deepen friendship and promote education
                and academic exchanges between students, faculty members, and administrative staff.</p>
            <ul>
                <li>Chubu Gakuin University</li>
                <li>FSG College League</li>
                <li>Musashino University</li>
                <li>Nihon Fukushi University</li>
                <li>Asia University</li>
                <li>Rissho University</li>
                <li>Poole Gakuin University</li>
                <li>Kanazawa Seiryo University</li>
                <li>Aichi Prefectural Federation of Agricultural Cooperative for Health and Welfare Partnership</li>
                <li>Fukujuen Social Welfare Corporation</li>
                <li>Jusenkai Social Welfare Corporation</li>
            </ul>
        </div>
        <div class="mb-5">
            <h3 class="color-title">BE ONE OF THEM!<span><img class="yellow-arrow ms-3 mb-2"
                        src="{{ asset('image/right_arrow.png') }}" alt=""></span></h3>
            <p>The College supports different educational tour opportunities outside the country. Selected students benefit
                from the beauty of cultural exchanges.</p>
            <p>The following are the study tour programs enjoyed by the MKDians:</p>
            <ul>
                <li>JPVA Study Tour Program</li>
                <li>Japan-East Asia Network of Exchange for Students and Youths Program (JENESYS Program)</li>
                <li>Japan Foundation Tour</li>
                <li>World Youth Meeting in Nihon Fukushi University</li>
                <li>KIZUNA Project</li>
            </ul>
        </div>
    </div>
@endsection
