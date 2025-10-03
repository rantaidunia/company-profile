@extends('layouts.main')

@section('title', 'Contact')

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

    .btn {
        width: 100%;
        border-radius: 5px !important;
        height: 50px;
        color: white !important;
        background-color: var(--accent-color) !important;
    }

    .btn:hover {
        background-color: #3bceff !important;
    }

    .form-control {
        font-size: 15px !important;
        height: 50px !important;
    }

    .area {
        height: 95% !important;
    }

    .maps iframe {
        width: 100% !important;
    }
</style>

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Contact</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Contact<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="col-lg-12 order-2 order-lg-1 mt-4" data-aos="fade-up" data-aos-delay="100">
                        <form id="form" role="form" action="{{ url('/send-mail') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control form-control-lg"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name"
                                            required>
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="email" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="subject" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control area" name="message" rows="5" id="comment" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn mt-3"><b>SEND MESSAGE</b></button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h6><b>Office</b></h6>
                        <p>Ruko Dharmawangsa II, Jl. Grand Taruma No. 42 Blok B, Sukamakmur, Telukjambe Timur Karawang Barat, Kab. Karawang, 41316 Jawa Barat.</p>
                    </div>
                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h6><b>Workshop</b></h6>
                        <p>Jl.Raya Kosambi-Telaga Sari No 56 Karawang</p>
                    </div>
                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h6><b>Workshop</b></h6>
                        <p>Curug-Kiari, Jawa Barat 41371, Karawang</p>
                    </div>
                    
                </div>

            </div>

        </section>

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                        <h6 style="text-align: center"><b>Workshop</b></h6>
                        <div class="maps mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3768.5753275054944!2d107.37847007499208!3d-6.426446893564582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjUnMzUuMiJTIDEwN8KwMjInNTEuOCJF!5e1!3m2!1sid!2sid!4v1730468188421!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                        <h6 style="text-align: center"><b>Workshop</b></h6>
                        <div class="maps mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3769.123198643843!2d107.3749923749915!3d-6.3520663936378625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjEnMDcuNCJTIDEwN8KwMjInMzkuMiJF!5e1!3m2!1sid!2sid!4v1730514221701!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                        <h6 style="text-align: center"><b>Office</b></h6>
                        <div class="maps mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3769.448944397781!2d107.27451637499104!3d-6.30742819368182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTgnMjYuNyJTIDEwN8KwMTYnMzcuNSJF!5e1!3m2!1sid!2sid!4v1730514335798!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection
