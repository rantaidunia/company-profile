@extends('layouts.main')

@section('title', 'Construction')

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
                    <h2><b>Experience List</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Experience List<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- About Us Section -->
        <section id="about-us" class="section about-us">
            <div class="container">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Project Name</th>
                            <th>Work Package</th>
                            <th>Project Location</th>
                            <th>Owner of Project</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Piping System TBBM Banjarmasin</td>
                            <td>Piping & Painting</td>
                            <td>Banjarmasin, Indonesia</td>
                            <td>PT. Agrabudi Karya Marga</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Piping, Steel Structure, Electrical & Instrumen Depot Mini LPG Sulut</td>
                            <td>Piping, Steel Structure, & Instrumen</td>
                            <td>Amurang, Indonesia</td>
                            <td>PT. Megah Jaya Prima Lestari</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Jasa Kontruksi Pembangunan Fire Water Tank 2 x 5000 KL Terminal LPG Balongan</td>
                            <td>Site Erection Fire Water Tank</td>
                            <td>Balongan Indramayu, Indonesia</td>
                            <td>Pertamina</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Piping, Steel Structure & Sandblast Painting Work Terminal LPG Teluk Kabung</td>
                            <td>Piping System & Steel Structure & Painting</td>
                            <td>Padang, Indonesia</td>
                            <td>Pertamina</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Piping and Painting Work Depot LPG Cilacap</td>
                            <td>Piping & Painting Work</td>
                            <td>Cilacap, Indonesia</td>
                            <td>Pertamina</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jasa Konstruksi Pembangunan Tanki Fire Water 1 x 2000 KL Terminal LPG Wayame</td>
                            <td>Site Erection Sire Water Tank 2000 KL</td>
                            <td>Wayame, Ambon, Indonesia</td>
                            <td>Pertamina</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>EPCI Akatara Gas Processing Facility & Sales Gas Pipeline Project</td>
                            <td>Site Erection Atmospheric Tank</td>
                            <td>Jambi, Indonesia</td>
                            <td>Jedestone Energy (Lemang) Pte, Ltd</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>1 x 90000 MT & 1 X 20000 MT Double Wall Tank LINE Project</td>
                            <td>Site Erection Double Wall Tank</td>
                            <td>Cilegon, Indonesia</td>
                            <td>PT. Lotte Chemical Indonesia</td>
                            <td>Completed</td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Counts Section -->
        {{-- <section id="counts" class="section counts light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Students</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Courses</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Events</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Trainers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section> --}}
        <!-- /Counts Section -->

        <!-- Testimonials Section -->
        {{-- <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>What are they saying</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                            quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                            irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                            quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                            quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                            esse veniam culpa fore nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section> --}}
        <!-- /Testimonials Section -->

    </main>
@endsection
