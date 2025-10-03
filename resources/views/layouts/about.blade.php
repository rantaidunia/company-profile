@extends('layouts.main')

@section('title', 'About')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>About Us<br></h1>
                            <p class="mb-0">PT. YAKIN MAKMUR TEKNIK <br>
                            Grand Taruma Darmawangsa Blok II.B No.42 – Karawang 
                            Phone: 0267 - 8407445
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About Us<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- About Us Section -->
        <section id="about-us" class="section about-us">

            <div class="container">
 
                <div class="row gy-4" style="padding:50px;">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.png" style="padding-left:50px;" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <p align="justify">
                            <b>PT. Yakin Makmur Teknik</b> 
                            secara pribadi 
                            milik perusahaan Indonesia, Kami sepenuhnya 
                            didirikan dan berpengalaman dalam desain 
                            rekayasa dan konstruksi baja, 
                            perpipaan, listrik & instrumen. Itu 
                            perusahaan berlokasi di Jakarta dengan a 
                            gabungan ekspatriat dan orang Indonesia 
                            tim yang bermotivasi tinggi dan berpengalaman 
                            spesialis
                        </p>
                        <p align="justify">
                            manajer dan insinyur yang dilengkapi dengan 
                            perangkat lunak dan teknologi komputer terkini
                            untuk memenuhi kode Internasional tertinggi 
                            dan standar.
                        </p>
                        <p align="justify">
                            Semua proyek kami dikelola oleh profesional 
                            dan manajer berpengalaman yang berdedikasi untuk
                            penugasan tertentu dengan penuh tanggung jawab 
                            melaksanakan pekerjaan untuk memenuhi spesifik Klien 
                            persyaratan dalam hal kualitas, jadwal dan 
                            keamanan
                        </p>
                        <p align="justify">
                            Due to our specialist
                            PT Yakin Makmur Teknik is today 
                            focus on Engineering , 
                            Procurement and Construction 
                            (EPC) of :
                        </p>
                        <ul style="padding-left:20px;">
                            <li>1. Atmospheric Tank</li>
                            <li>2. Double Wall Tank</li>
                            <li>3. Electrical & Instrument</li>
                            <li>4. Steel Structure</li>
                            <li>5. Sanblasting & Painting</li>
                            <li>6. Piping System</li>
                        </ul>
                    </div>

                </div>

            </div>

        </section><!-- /About Us Section -->

        

    </main>
@endsection
