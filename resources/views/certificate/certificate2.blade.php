@extends('layouts.main')

@section('title', 'ISO 45001:2018_YM-TEKNIK')

<style>
    .breadcrumbs .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* Agar teks dan breadcrumb sejajar secara vertikal */
    }

    .breadcrumbs h1 {
        margin: 0;
        /* Hilangkan margin untuk teks agar menempel ke kiri */
    }

    .breadcrumbs ol {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumbs ol li {
        margin-left: 10px;
        /* Spasi antar item breadcrumb */
    }

    .breadcrumbs ol li a {
        text-decoration: none;
        /* Sesuaikan sesuai keinginan */
    }

    .sociall a i {
        display: flex;
        /* Agar lingkaran sesuai dengan ikon */
        justify-content: center;
        /* Pusatkan ikon di dalam lingkaran */
        align-items: center;
        /* Pusatkan secara vertikal di lingkaran */
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid var(--default-color);
        /* Warna lingkaran */
        font-size: 16px;
        color: var(--default-color);
        /* Warna ikon */
        margin-right: 10px;
        transition: 0.3s;
        text-decoration: none;
        /* Hilangkan underline pada link */
    }

    .sociall a i:hover {
        color: #00d632;
        /* Warna ikon saat hover */
        border-color: #00d632;
        /* Warna border saat hover */
    }

    .sociall {
        font-size: 16px;
        /* Ukuran teks */
        color: var(--default-color);
        /* Warna teks */
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
</style>

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>ISO 45001:2018_YM-TEKNIK</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current text">ISO 45001:2018_YM-TEKNIK<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/certificate/2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <h6><b>Date:</b> 15 October 2024</h6>
                    <hr>
                    <h6 class="mt-3"><b>Category:</b> Certificate</h6>
                    <hr>
                </div>
                <div class="col-lg-6">
                    <div class="sociall d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="container d-flex pn">
                        <div class="d-flex" style="align-items: center;">
                            <a href="{{ url('/iso-9001-2015-ym-teknik') }}"><i class="bi bi-arrow-left-square-fill"></i></a>
                            <div class="container">
                                <h6 class="text" style="color: var(--accent-color);"><b>PREVIOUS</b></h6>
                                <h6 class="text">ISO 9001:2015_YM-TEKNIK</h6>
                            </div>
                        </div>
                        <div class="d-flex" style="align-items: center;">
                            <div class="container" style="text-align: end">
                                <h6 class="text" style="color: var(--accent-color);"><b>NEXT</b></h6>
                                <h6 class="text">ISO 14001:2015_YM-TEKNIK</h6>
                            </div>
                            <a href="{{ url('/iso-14001-2015-ym-teknik') }}"><i class="bi bi-arrow-right-square-fill"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection
