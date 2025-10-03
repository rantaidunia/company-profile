@extends('layouts.main')

@section('title', 'Company - PT Yakin Makmur Teknik')

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
</style>

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Overview</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Overview<br></li>
                    </ol>
                </div>
            </nav>
        </div>

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        {{-- <h3>Voluptatem dignissimos provident quasi corporis</h3> --}}
                        <p class="p" style="text-align: justify;">
                            <b>PT. Yakin Makmur Teknik</b> a privately
                            owned Indonesian company, We are fully
                            established and experienced in design
                            engineering and construction of steel,
                            piping, electrical & instrument. The
                            company is located in Jakarta with a
                            combined expatriates and Indonesian
                            team of highly motivated and experienced
                            specialist managers and engineers equipped with the
                            latest computer software and technology
                            to meet the highest International codes
                            and standards.<br><br>
                            All of our projects are managed by professional
                            and experienced managers dedicated to
                            specific assignments with full responsibility to
                            execute the work to meet the Clients specific
                            requirements in term of quality, schedule and
                            safety Due to our specialist PT Yakin Makmur Teknik is today
                            focus on Engineering ,
                            Procurement and Construction
                            (EPC) of :<br>

                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Atmospheric Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Double Wall Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Electrical & Instrument</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Steel Structure</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Sanblasting & Painting</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Piping System</span></li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
