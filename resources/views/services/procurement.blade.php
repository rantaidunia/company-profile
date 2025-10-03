@extends('layouts.main')

@section('title', 'Procurement')

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
            {{-- <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Engineering<br></h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Procurement</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Procurement<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/procurment.jpeg') }}" class="img-fluid" alt="" width="500px" height="500px">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        {{-- <h3>Voluptatem dignissimos provident quasi corporis</h3> --}}
                        <p class="p" style="text-align: justify;">
                            Tim Procurement YM-TEKNIK bekerja sama dengan pemasok lokal dan global yang
                            andal. Kami berusaha untuk memastikan pengiriman tepat waktu dan efisiensi dengan secara
                            efektif memperoleh barang dengan harga kompetitif dengan kualitas terbaik yang sesuai
                            dengan kebutuhan klien kami.<br><br>
                            Tim Procurement YM-TEKNIK berpengalaman dibidang EPC Storage Tank seperti: <br>
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Spherical Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Floating Roof Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Cryogenic Tank</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>LNG Tank System</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>LNG Satellite System</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Re-tester Plant LPG Cylinder 3kg, 12kg, 50kg</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
