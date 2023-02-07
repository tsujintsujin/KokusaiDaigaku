@extends('layout')
@section('content')
<div class="container-fluid">
<div class="row align-items-center mt-5 mb-5">
    <div class="col text-title-lines ">
    </div>
    <div class="col text-center">
        <h1 class="fw-bold color-title">ABOUT US</h1>
    </div>
    <div class="col text-title-lines">
    </div>
</div>
</div>
<div>
    <img src="{{ asset('/image/abouthero.jpg') }}" class="img-fluid">
</div>

<div class="container my-5 text-center text-dark d-flex align-items-center">
        <div class="row">
            <div class="col-lg-4 p-5" data-aos="fade-down" data-aos-delay="300">
                <h2 class="fw-bold color-title ">MISSION</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">W</span>e aim to provide a diverse
                    range of
                    learning opportunities and activities in
                    Japanese, English, and Filipino
                    languages, as well as other
                    competencies. Our goal is to produce
                    quality and relevant research outputs,
                    while also promoting social justice and
                    peace through exposure to diverse
                    cultures. Additionally, we strive to
                    instill a culture of morality, civic
                    consciousness, gender sensitivity, and
                    corporate social responsibility in all of
                    our endeavors.</h5>
            </div>
            <div class="col-lg-4 p-5" data-aos="fade-down" data-aos-delay="600">
                <h2 class="fw-bold color-title">PHILOSOPHY</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">T</span>he College is dedicated to
                    providing
                    a holistic education, and aims to
                    produce graduates who are well-rounded
                    individuals. Our goal is to
                    empower students to become active
                    and engaged members of society,
                    equipped to face any global problem.
                    To achieve this, we provide quality
                    education and a wide range of learning
                    opportunities. We also focus on
                    developing the whole person, including
                    their emotional, social, and ethical
                    abilities, in order to create graduates who have the knowledge, skills, and
                    values to make a positive impact on
                    the world.</>
            </div>
            <div class="col-lg-4 p-5" data-aos="fade-down" data-aos-delay="900">
                <h2 class="fw-bold color-title">VISION</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">A</span>n academic community
                    proficient in
                    Japanese Language, equipped with
                    multicultural sensitivity, strong work
                    ethics, and global competencies is
                    essential in today's globalized world.
                    They are well-prepared for the
                    challenges and opportunities of the
                    21st century, and will be able to make
                    a positive impact in their fields and in
                    the world at large.</h5>
            </div>
        </div>
    </div>
    <hr>

    <div class="container mt-5">
        <h1 class="fw-bold color-title text-center">THE PILLARS OF MKD</h1>
        <div class="row text-center mt-5 mb-5">
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('/image/MR-TATSUO-UCHIDA.jpg') }}" class="rounded-circle border-style"><br>
                <h5 class="fw-bold mt-3">MR. TATSUO UCHIDA</h5>
            </div>
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
            <img src="{{ asset('/image/mrs-ayako-uchida.jpg') }}" class="rounded-circle border-style"><br>
                <h5 class="fw-bold mt-3">MRS. AYAKO UCHIDA</h5>
            </div>
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="900">
            <img src="{{ asset('/image/REV-MASATAKA-AJIRO.jpg') }}" class="rounded-circle border-style"><br>
                <h5 class="fw-bold mt-3">REV. MASATAKA AJIRO</h5>
            </div>
        </div>
    </div>

    <div class="container justify-content mb-5">
        <ul class="list-group list-group-flush">
            <li class="mb-3 list-group-item">
            Mindanao Kokusai Daigaku is a tertiary educational institution of the Philippine Nikkei
            Jin Kai in Davao City, Philippines. The College building was constructed in the year 2001
            through the funding and generosity of the late Mr. Tatsuo Uchida (who died last May 2016), a
            past President of the Japan-Philippine Volunteer Association (JPVA). The MKD edifice serves
            as a legacy for his wife, the late Ayako Uchida who died in 1999.
            </li>
            <li class="mb-3 list-group-item">
            MKD commenced its operation in the year 2002, with the strong support and assistance
            coming from the JPVA headed by the President at the time, Mr. Masataka Ajiro, who helped
            significantly in the establishment of the College and in the crafting of the school’s philosophy
            and basic principles.
            </li>
            <li class="mb-3 list-group-item">
            MKD is established primarily to address the needs of Japan and the Philippines, to help the
            young Filipinos of the 21st century in their pursuit of academic excellence, to serve humanity,
            and become a new bridge between the two nations. The establishment of MKD served as a
            pinnacle of the JPVA activities and the growth of PNJK’s educational services.
            </li>
        </ul>
    </div>
    <hr>

    <div class="container mt-5 text-center">
        <h1 class="fw-bold color-title mb-4">THE SCHOOL SEAL</h1>
        <p>
            Recognized by CHED and Accredited by the Bureau of Immigration to accept Foreign Students Member:
            Association of Private and State College and Universities in Region XI (APSCUR)
            Philippines Association for Teacher Education XI (PAFTE)
            Association of Registrars in School Colleges and Universities (ARSCU)
        </p>
        <div class="row mt-5 mb-5">
            <div class="col justify-content mb-5">
                The ideogram is a product of many minds
                reflective of the Filipino and Japanese
                cultures. The logo was originally designed
                by a member of the MKD Board of Trustees,
                Mr. Ricardo N. Obenza, Jr.
            </div>
            <div class="col">
                <img src="{{ asset('/image/kokusai_meaning.png') }}" class="mb-5">
            </div>
            <div class="col justify-content">
                In the center of the big circle are the
                three letters M, K, & D inscribed in
                a Mindanaoan ethnic fashion. The small
                circle in red at the upper right represent
                the country of Japan.  
            </div>
        </div>
    </div>
    <hr>

    <div class="container mb-5 mt-5">
        <h1 class="text-center color-title fw-bold"><span style="color:#F6C400;">MKD </span>HYMN</h1>
    </div>

@endsection