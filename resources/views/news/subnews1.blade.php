@extends('layouts.main')

@section('title', 'News - PT Yalin Makmur Teknik')

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet">

<style>
    .breadcrumbs .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .breadcrumbs h1 {
        margin: 0;
    }

    .breadcrumbs ol {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumbs ol li {
        margin-left: 10px;
    }

    .breadcrumbs ol li a {
        text-decoration: none;
    }

    .img-boxx {
        border: 1px solid #cccccc5e;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card {
        background-color: #fff;
        border-radius: 1px !important;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease;
        width: 100%;
    }

    .blog-card:hover .card {
        transform: scale(1.05);
        /* Memperbesar kartu menjadi 1.05 kali ukuran aslinya */
    }

    .card-headerr img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .tag-teal {
        background-color: var(--accent-color);
    }

    .tag-purple {
        background-color: #5e76bf;
    }

    .tag-pink {
        background-color: #cd5b9f;
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }

    .user {
        display: flex;
        margin-top: 35px;
    }

    .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .user-info h5 {
        margin: 0;
    }

    .user-info small {
        color: #545d7a;
    }

    .user .btn-getstarted,
    .user .btn-getstarted:focus {
        color: var(--contrast-color);
        background: var(--accent-color);
        font-size: 14px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .user .btn-getstarted:hover,
    .user .btn-getstarted:focus:hover {
        color: var(--contrast-color);
        background: #3bd660;
    }

    .container {
        width: 100%;
    }

    .container h3 {
        margin-bottom: 10px;
    }

    .container .d-flex {
        flex-wrap: wrap;
        gap: 10px;
    }

    .container h6 {
        margin-right: 15px;
    }

    .pn {
        justify-content: space-between;
        background-color: #d9d9d974;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        align-items: center;
        height: 90px;
    }

    .pn i {
        font-size: 40px;
    }

    @media (max-width: 576px) {
        .text {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    }

    .induk {
        margin-top: 70px;
        width: 100%;
        margin-bottom: 30px;
    }

    .contener {
        margin-left: 50px;
    }

    @media (max-width: 576px) {
        .contener {
            margin-left: 1px;
        }
    }
</style>

@section('content')
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <h2><b>News</b></h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">News<br></li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="trainers-index" class="section trainers-index">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="container">
                        <h3>LPG Cilacap Spherical Tank 3000MT Construction</h3>
                        <div class="d-flex">
                            <h6 class="text-secondary"><i class="bi bi-calendar-date-fill"></i> 15 Oct 2024</h6>
                            <h6 class="text-secondary ml-2"><i class="bi bi-person-fill"></i> 15 Oct 2024</h6>
                            {{-- <h6 class="text-secondary ml-2"><i class="bi bi-calendar-month"></i> 15 Oct 2024</h6>
                            <h6 class="text-secondary ml-2"><i class="bi bi-calendar-month"></i> 15 Oct 2024</h6> --}}
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/slider/1.jpg') }}" alt="rover"
                        style="width: 100%; margin-top: 20px;" />
                    <iframe class="mt-3" width="100%" height="500"
                        src="https://www.youtube.com/embed/0aRLee161Co?si=EYRFgSujkZ2fvQKv" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="induk d-flex pn">
                        <div class="d-flex" style="align-items: center;">
                            <a href="#"><i class="bi bi-arrow-left-square-fill"></i></a>
                            <div class="containr">
                                <h6 class="text" style="color: var(--accent-color);"><b>PREVIOUS</b></h6>
                                {{-- <h6 class="text">ISO 9001:2015_YM-TEKNIK</h6> --}}
                            </div>
                        </div>
                        <div class="d-flex" style="align-items: center;">
                            <div class="containr" style="text-align: end">
                                <h6 class="text" style="color: var(--accent-color);"><b>NEXT</b></h6>
                                {{-- <h6 class="text">ISO 14001:2015_YM-TEKNIK</h6> --}}
                            </div>
                            <a href="#"><i
                                    class="bi bi-arrow-right-square-fill"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 mt-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="contener">
                        <h3><b>RECENT POST</b></h3>
                        <p style="margin-top: 60px"><b>LPG Cilacap Spherical Tank 3000MT Construction</b></p>
                        <div class="text-secondary">
                            <p>21 October 2024</p>
                            <hr>
                        </div>
                        <p><b>2×44.000 MT LPG Refrigerated Tuban, Jawa Timur</b></p>
                        <div class="text-secondary">
                            <p>17 November 2024</p>
                            <hr>
                        </div>
                        <p><b>2×1000 MT LPG Pressurized & 1×2000 KL Terminal LPG WAYAME</b></p>
                        <div class="text-secondary">
                            <p>10 December 2024</p>
                            <hr>
                        </div>
                        <h3 class="mt-5"><b>RECENT POST</b></h3>
                        <div class="text-secondary">
                            <p>NEWS</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->
            </div>
        </div>
    </section>
@endsection
