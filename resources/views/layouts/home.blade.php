@extends('layouts.main')

@section('title', 'PT Yakin Makmur Teknik - Home')

<style>
    .carousel {
        height: 700px;
    }

    .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .carousel-caption {
        position: relative;
        top: 50%;
        left: 5%;
        /* Tetap menggunakan 5% untuk posisi awal */
        transform: translate(-110px, -50%);
        /* Menggeser ke kiri sebesar 110px */
        color: white !important;
        text-align: left;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    @media (max-width: 768px) {
        .carousel-caption {
            transform: translate(0, -50%);
            /* Kembalikan posisi default di layar lebih kecil */
            left: 5%;
            /* Kembalikan ke posisi default */
        }
    }


    .carousel-caption h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: white !important;
    }

    .carousel-caption p {
        font-size: 1.25rem;
        margin-top: 0.5rem;
        color: white !important;
    }

    .carousel-caption .btn-get-started {
        font-size: 1rem;
        padding: 10px 20px;
        background-color: #00c0fe;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 1rem;
    }

    .carousel-caption .btn-get-started:hover {
        background-color: #2E363A;
    }

    .carousel-caption .btn-get {
        font-size: 1rem;
        padding: 10px 20px;
        background-color: #2E363A;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 1rem;
    }

    .carousel-caption .btn-get:hover {
        background-color: #00c0fe;
    }

    .carousel-item .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.39);
        z-index: 5;
    }

    .memberr {
        position: relative;
        width: 100%;
        /* Lebar penuh kontainer */
        height: 185px;
        /* Tinggi tetap yang diinginkan */
        display: flex;
        /* Flexbox untuk memudahkan penempatan gambar */
        align-items: center;
        /* Posisikan konten (gambar) di tengah secara vertikal */
        justify-content: center;
        /* Posisikan konten (gambar) di tengah secara horizontal */
        overflow: hidden;
        /* Pastikan gambar yang melampaui area tidak terlihat */
    }

    .img-boxx {
        width: 100%;
        /* Otomatis menyesuaikan lebar */
        height: 100%;
        /* Gambar mengisi tinggi kontainer */
        object-fit: cover;
        object-position: center;
    }


    .btn-overlay {
        position: absolute;
        top: 80%;
        left: 50%;
        width: 80%;
        transform: translate(-50%, -50%);
        background-color: #3A526ADE;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-overlay:hover {
        background-color: #3a526abc;
        color: white;
    }

    @media (min-width: 1200px) {

        /* 4 items per row on large screens */
        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {

        /* 3 items per row on medium screens */
        .col-md-6 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {

        /* 2 items per row on smaller screens */
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 767.98px) {

        /* 1 item per row on mobile screens */
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 767.98px) {
        .col-md-6 {
            margin-bottom: 15px;
            /* Atur margin bawah antara setiap gambar */
        }
    }

    .wrapper {
        max-width: 1100px;
        width: 100%;
        position: relative;
    }

    .wrapper i {
        top: 50%;
        height: 50px;
        width: 50px;
        cursor: pointer;
        font-size: 1.25rem;
        position: absolute;
        text-align: center;
        line-height: 50px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
        transform: translateY(-50%);
        transition: transform 0.1s linear;
    }

    .wrapper i:active {
        transform: translateY(-50%) scale(0.85);
    }

    .wrapper i:first-child {
        left: -22px;
    }

    .wrapper i:last-child {
        right: -22px;
    }

    .wrapper .carousel {
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: calc((100% / 3) - 12px);
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 16px;
        border-radius: 8px;
        scroll-behavior: smooth;
        scrollbar-width: none;
    }

    .carousel::-webkit-scrollbar {
        display: none;
    }

    .carousel.no-transition {
        scroll-behavior: auto;
    }

    .carousel.dragging {
        scroll-snap-type: none;
        scroll-behavior: auto;
    }

    .carousel.dragging .card {
        cursor: grab;
        user-select: none;
    }

    .carousel :where(.card, .img) {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel .card {
        scroll-snap-align: start;
        height: 342px;
        list-style: none;
        background: #fff;
        cursor: pointer;
        padding-bottom: 15px;
        flex-direction: column;
        border-radius: 8px;
    }

    .carousel .card .img {
        background: #8B53FF;
        height: 148px;
        width: 148px;
        border-radius: 50%;
    }

    .card .img img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
    }

    .carousel .card h2 {
        font-weight: 500;
        font-size: 1.56rem;
        margin: 30px 0 5px;
    }

    .carousel .card span {
        color: #6A6D78;
        font-size: 1.31rem;
    }

    @media screen and (max-width: 900px) {
        .wrapper .carousel {
            grid-auto-columns: calc((100% / 2) - 9px);
        }
    }

    @media screen and (max-width: 600px) {
        .wrapper .carousel {
            grid-auto-columns: 100%;
        }
    }


    /* Slider */

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .certificate div img {
        transition: 0.3s ease-in-out;
    }

    /* Hover effect default (tanpa klik) */
    .certificate div img:hover {
        transform: scale(1.1);
        /* Zoom sedikit sebagai efek hover */
        filter: brightness(50%) sepia(10%) hue-rotate(0deg);
        /* Efek abu-abu gelap saat hover */
        box-shadow: 0 4px 15px rgba(74, 74, 74, 0.3);
        /* Shadow lebih gelap */
    }

    .certificate div::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(50, 50, 50, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        pointer-events: none;
    }

    /* .evo-calendar {
        background-color: #ff0000 !important;
    } */

    .evo-calendar .calendar-sidebar {
        background-color: #00c0fe !important;
    }

    #calendar .evo-calendar .calendar-header h1 {
        color: #00c0fe !important;
    }


    /* .evo-calendar .calendar-header {
        background-color: #00ff7b !important;
    }

    .evo-calendar .calendar-body {
        background-color: #ffae00 !important;
    }

    .evo-calendar .event-container {
        background-color: #ff04bc !important;
    } */
</style>



@section('content')
    <main class="main">
        {{-- <section id="hero" class="hero section dark-background">
            <!-- Gambar untuk slideshow -->
            <div class="hero-images">
                <img src="assets/img/hero-bg.jpg" alt="Hero Image 1" class="active" data-aos="fade-in">
                <img src="assets/img/course-details.jpg" alt="Hero Image 2" data-aos="fade-in">
            </div>

            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
                <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap
                </p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="courses.html" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </section> --}}

        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide Pertama -->
                <div class="carousel-item active">
                    <div class="overlay"></div> <!-- Overlay Ditambahkan di sini -->
                    <img class="d-block w-100" src="{{ asset('assets/img/slider/1.jpg') }}" alt="First slide">
                    <div class="carousel-caption text-start">
                        <h2 data-aos="fade-up" data-aos-delay="100">PT Yakin Makmur Teknik - EPC Storage Tank Company
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="200">Grand Taruma Darmawangsa Blok <br> II.B No.42 – Karawang
                        </p>
                        <div class="d-flex mt-3" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ url('/about') }}" class="btn-get-started">Our Company</a>
                            <a href="{{ url('/contact') }}" style="margin-left: 15px;" class="btn-get">Get in Touch</a>
                        </div>
                    </div>
                </div>

                <!-- Slide Kedua -->
                <div class="carousel-item">
                    <div class="overlay"></div> <!-- Overlay Ditambahkan di sini -->
                    <img class="d-block w-100" src="{{ asset('assets/img/slider/2.jpeg') }}" alt="Second slide">
                    <div class="carousel-caption text-start">
                        <h2 data-aos="fade-up" data-aos-delay="100">PT Yakin Makmur Teknik - EPC Storage Tank Company
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="200">Grand Taruma Darmawangsa Blok <br> II.B No.42 – Karawang
                        </p>
                        <div class="d-flex mt-3" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ url('/about') }}" class="btn-get-started">Our Company</a>
                            <a href="{{ url('/contact') }}" style="margin-left: 15px;" class="btn-get">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button> --}}
        </div>

        <!-- Trainers Index Section -->
        <section id="trainers-index" class="section trainers-index">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="column">
                            <div class="memberr position-relative">
                                <img src="{{ asset('assets/img/engineering.jpeg') }}" class="img-fluid img-boxx" alt="">
                                <a href="{{ url('/engineering') }}" class="btn-overlay"><b>ENGINEERING</b></a>
                            </div>
                            <div class="memberr position-relative mt-2">
                                <img src="{{ asset('assets/img/procurment.jpeg') }}" class="img-fluid img-boxx" alt="">
                                <a href="{{ url('/procurement') }}" class="btn-overlay"><b>PROCUREMENT</b></a>
                            </div>
                            <div class="memberr position-relative mt-2">
                                <img src="{{ asset('assets/img/kontruksi.jpeg') }}" class="img-fluid img-boxx"
                                    alt="">
                                <a href="{{ url('/construction') }}" class="btn-overlay"><b>CONSTRUCTION</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Trainers Index Section -->

        <!-- Trainers Index Section -->
        {{-- <section id="trainers-index" class="section trainers-index">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="memberr position-relative">
                            <img src="{{ asset('assets/img/engineering.jpeg') }}" class="img-fluid img-boxx" alt="">
                            <a href="{{ url('/engineering') }}" class="btn-overlay"><b>ENGINEERING</b></a>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="memberr position-relative">
                            <img src="{{ asset('assets/img/procurment.jpeg') }}" class="img-fluid img-boxx" alt="">
                            <a href="{{ url('/procurement') }}" class="btn-overlay"><b>PROCUREMENT</b></a>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="memberr position-relative">
                            <img src="{{ asset('assets/img/kontruksi.jpeg') }}" class="img-fluid img-boxx"
                                alt="">
                            <a href="{{ url('/construction') }}" class="btn-overlay"><b>CONSTRUCTION</b></a>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section> --}}
        <!-- /Trainers Index Section -->

        <!-- Features Section -->
        <section id="features" class="features section light-background">

            <div class="container" style="padding-top: 80px; padding-bottom: 80px;">

                <div class="row gy-4">
                    <h2 data-aos="fade-up" data-aos-delay="100"><b>Our Experience</b></h2>

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <i class="bi bi-disc" style="color: #ffbb2c;"></i>
                            <h3><a href="#" class="stretched-link">Atmospheric Tank</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-database" style="color: #5578ff;"></i>
                            <h3><a href="#" class="stretched-link">Double Wall Tank</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-lightning" style="color: #e80368;"></i>
                            <h3><a href="#" class="stretched-link">Electrical & Instrument</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <i class="bi bi-nut" style="color: #e361ff;"></i>
                            <h3><a href="#" class="stretched-link">Steel Structure</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-paint-bucket" style="color: #47aeff;"></i>
                            <h3><a href="#" class="stretched-link">Sanblasting & Painting</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <i class="bi bi-tools" style="color: #ff7c6e;"></i>
                            <h3><a href="#" class="stretched-link">Piping System</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Features Section -->
        <section id="features" class="features section ">
            <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="row gy-4">
                    <h2 data-aos="fade-up" data-aos-delay="100"><b>Our Certificate</b></h2>

                    <div class="certificate">
                        <div>
                            <a href="{{ url('/iso-9001-2015-ym-teknik') }}"><img id="hover-1"
                                    src="{{ asset('assets/img/certificate/1.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="100"></a>
                        </div>
                        <div>
                            <a href="{{ url('/iso-45001-2018-ym-teknik') }}"><img id="hover-2"
                                    src="{{ asset('assets/img/certificate/2.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="200"></a>
                        </div>
                        <div>
                            <a href="{{ url('/iso-14001-2015-ym-teknik') }}"><img id="hover-3"
                                    src="{{ asset('assets/img/certificate/3.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="300"></a>
                        </div>
                        <div>
                            <a href="{{ url('/iso-9001-2015-ym-teknik') }}"><img id="hover-1"
                                    src="{{ asset('assets/img/certificate/1.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="100"></a>
                        </div>
                        <div>
                            <a href="{{ url('/iso-45001-2018-ym-teknik') }}"><img id="hover-2"
                                    src="{{ asset('assets/img/certificate/2.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="200"></a>
                        </div>
                        <div>
                            <a href="{{ url('/iso-14001-2015-ym-teknik') }}"><img id="hover-3"
                                    src="{{ asset('assets/img/certificate/3.png') }}" class="img-fluid" alt=""
                                    data-aos="fade-up" data-aos-delay="300"></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Features Section -->

        <!-- Trainers Index Section -->
        {{-- <section id="trainers-index" class="section trainers-index">

            <div class="container">

                <h2 data-aos="fade-up" data-aos-delay="100"><b>Key of Success</b></h2>

                <div class="row" style="margin-top: 40px;">


                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/mardiyono.png') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Ir. Mardiyono</h4>
                                <h6>President Director</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    25 years of experience in EPCM company serving as Construction
                                    Manager, Site Manager, Project Manager and Technical Derector in the
                                    fields of Oil and Gas LNG Plant and Petrochemical Plant, Refinery and
                                    power plant. Experience working in several Overseas Companies:<br>
                                    • ICE Petroleum Sdn Bhs, Malaysia<br>
                                    • Samsung Heavy Industri. Co. Ltd, Korea.<br>
                                    • PT. Winteco Corporation, Korea<br>
                                    • PT. Rutledge Singapore<br>
                                    • Chicago Bridge & Iron. Co.Ltd, (Indonesia)
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/indra.png') }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Indra B Cahyono ST.</h4>
                                <h6>Project Manager</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    15 years of experience in various projects as Drafting, Designing,
                                    Estimating, Bid preparation, Planning, Scheduling, Project Control,
                                    Project Management, Reporting, experience in the field of Engineering
                                    and Construction for Spherical Tanks, Atmospheric Tanks, Double Wall
                                    Tanks, Stell Structures, Pressure Vessels in Petrochemical Plant, Refinery
                                    and Power Plant environments.<br>
                                    and Power Plant environments.
                                    Experience working in several Overseas Companies:<br>
                                    • Samsung Heavy Industri. Co. Ltd, (Thailand).
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/yossi.png') }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Yossi Yulfikar Y ST.</h4>
                                <h6>Site Manager</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    10 years of experience in various projects as planning, scheduling,
                                    project control, reporting, experience in the field of engineering and
                                    construction as site manager for spherical tanks, atmospheric tanks,
                                    double wall tanks, steel structures, pressure vessels in Petrochemical
                                    Plant, Refinery and Power Plant environments.
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section> --}}
        <!-- /Trainers Index Section -->

        <!-- Features Section -->
        <section id="features" class="features section light-background mb-5">
            <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="row gy-4">
                    <h2 data-aos="fade-up" data-aos-delay="100"><b>Our Clients</b></h2>

                    <div class="container">
                        <section class="customer-logos slider">
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/pertamina2.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/lote.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/jade.png') }}"></div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/pertamina2.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/lote.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/jade.png') }}"></div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/pertamina2.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/lote.png') }}">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('assets/img/clients/jade.png') }}"></div>
                            {{-- <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
                            </div>
                            <div class="slide" data-aos="fade-up" data-aos-delay="100"><img
                                    src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
                            </div> --}}
                        </section>

                        <h2><a href="http://www.webcoderskull.com" target="_blank">http://www.webcoderskull.com</a></h2>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Features Section -->

    </main>
@endsection
