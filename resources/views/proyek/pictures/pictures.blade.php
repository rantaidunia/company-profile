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
</style>

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Pictures</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Pictures<br></li>
                    </ol>
                </div>
            </nav>
        </div>

        <section id="events" class="events section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/electrical/4.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/electrical') }}">Electrical and Instrument</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p> --}}
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/atmospheric/5.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/atmospheric') }}">Atmospheric Tank</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p> --}}
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo</p> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/doublewall/3.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/double') }}">Double Wall Tank</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p> --}}
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo</p> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/stell/2.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/steel') }}">Steel Structure</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p> --}}
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo</p> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/painting/2.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/sandlasting') }}">Sandlasting and Painting</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p> --}}
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo</p> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/piping/5.png') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/pictures/piping') }}">Piping System</a></h5>
                                <!-- {{-- <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p> --}}
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo</p> -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>
    </main>
@endsection
