@extends('layouts.main')

@section('title', 'Pictures - PT Yakin Makmur Teknik')

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

    .card-text {
        text-align: justify;
    }

    .card-img {
        width: 100%;
        height: 250px;
        /* Atur tinggi box sesuai kebutuhan */
        overflow: hidden;
        /* Agar gambar yang keluar dari box terpotong */
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Gambar akan menyesuaikan tanpa merubah aspect ratio */
        object-position: center;
        /* Gambar tetap di tengah jika melebihi ukuran */
    }

    .slick-picture {
        width: 100%;
        max-width: 850px;
        /* Tetap membatasi gambar pada slick-picture agar tidak terlalu besar */
        height: 600px;
        object-fit: cover;
        margin: 0 auto;
    }

    .slick-nav {
        margin-top: 20px;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    /* Style for images inside the navigation */
    .slick-nav img {
        width: 100%;
        max-width: 300px;
        height: 200px;
        object-fit: cover;
        /* border-radius: 8px; */
        transition: transform 0.3s ease, border 0.3s ease;
        cursor: pointer;
    }

    /* Add border and zoom effect for active thumbnails */
    .slick-nav .slick-current img {
        transform: scale(1.1);
        border: 2px solid #007bff;
    }

    /* Slick arrows (Prev and Next buttons) */
    .slick-prev,
    .slick-next {
        z-index: 2;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.5);
        /* border-radius: 50%; */
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 20px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .slick-prev:hover,
    .slick-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    @media screen and (max-width: 768px) {
        .slick-picture img {
            height: 250px;
        }

        .slick-nav {
            position: relative;
            /* Add relative positioning */
            top: -350px;
            /* Move the slick-nav upwards */
        }

        .slick-nav img {
            max-width: 100px;
            height: 50px;
        }

        .slick-prev,
        .slick-next {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
    }


    @media screen and (max-width: 480px) {
        .slick-picture img {
            height: 250px;
        }

        .slick-nav img {
            max-width: 100px;
            height: 50px;
        }

        .slick-prev,
        .slick-next {
            display: none;
        }
    }

    .imgs {
        margin-left: 15px;
    }
</style>

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Sandlasting and Painting</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Pictures<br></li>
                        <li class="current">Sandlasting and Painting<br></li>
                    </ol>
                </div>
            </nav>
        </div>

        <section id="events" class="events section">

            <div class="container" data-aos="fade-up">

                <div class="slick-picture">

                    <img id="hover-3" src="{{ asset('assets/img/painting/1.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/2.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/3.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/4.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/5.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/6.png') }}" class="img-fluid" alt=""
                        data-aos="fade-up" data-aos-delay="100">

                </div>

                <div class="slick-nav">

                    <img id="hover-3" src="{{ asset('assets/img/painting/1.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/2.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/3.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/4.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/5.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">


                    <img id="hover-3" src="{{ asset('assets/img/painting/6.png') }}" class="img-fluid imgs"
                        alt="" data-aos="fade-up" data-aos-delay="100">

                </div>

            </div>

        </section>
    </main>
@endsection
