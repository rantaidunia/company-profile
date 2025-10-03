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
                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ url('/news/lpg-cilacap-spherical-tank-3000mt-construction') }}" class="blog-card spring-fever">
                        <div class="card">
                            <div class="card-headerr">
                                <img src="{{ asset('assets/img/slider/slider1.png') }}" alt="rover" />
                            </div>
                            <div class="card-body">
                                <span class="tag tag-teal">15 Oct 2025</span>
                                <h5 class="mt-3">
                                    LPG Cilacap Spherical Tank 3000MT Construction
                                </h5>
                                <div class="user">
                                    <div class="btn-getstarted">Read More</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="blog-card spring-fever">
                        <div class="card">
                            <div class="card-headerr">
                                <img src="{{ asset('assets/img/slider/1.jpg') }}" alt="rover" />
                            </div>
                            <div class="card-body">
                                <span class="tag tag-teal">15 Oct 2025</span>
                                <h5 class="mt-3">
                                    2×44.000 MT LPG Refrigerated Tuban, Jawa Timur
                                </h5>
                                <div class="user">
                                    <div class="btn-getstarted">Read More</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="blog-card spring-fever">
                        <div class="card">
                            <div class="card-headerr">
                                <img src="{{ asset('assets/img/slider/2.jpeg') }}" alt="rover" />
                            </div>
                            <div class="card-body">
                                <span class="tag tag-teal">15 Oct 2025</span>
                                <h5 class="mt-3">
                                    2×1000 MT LPG Pressurized & 1×2000 KL Terminal LPG WAYAME
                                </h5>
                                <div class="user">
                                    <div class="btn-getstarted">Read More</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Team Member -->
            </div>
        </div>
    </section>
@endsection
