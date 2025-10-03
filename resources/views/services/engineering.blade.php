@extends('layouts.main')

@section('title', 'Engineering')

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
</style>

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Engineering</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Engineering<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/engineering.jpeg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        {{-- <h3>Voluptatem dignissimos provident quasi corporis</h3> --}}
                        <p class="p" style="text-align: justify;">
                            Tim Engineering YM-TEKNIK berkomitmen untuk memberikan layanan sesuai
                            dengan persyaratan kontrak klien. Kami juga berdedikasi dalam mematuhi standar dan
                            peraturan Indonesia serta Internasional.<br><br>
                            Tim Engineering YM-TEKNIK berpengalaman dibidang EPC Storage Tank seperti: <br>

                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Spherical Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Floating Roof Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Cryogenic Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>LNG Tank System</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>LNG Satellite System</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Re-tester Plant LPG Cylinder 3kg, 12kg, 50kg</span></li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
