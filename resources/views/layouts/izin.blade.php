@extends('layouts.main')

@section('title', 'Izin Usaha')
<style>
    /*--- Image hover Effects
-----------------------------------------------*/
.image-zoom-effect {
  display: flex;
  flex-wrap: wrap;
}

.image-zoom-effect .image-holder {
  width: 100%;
  height: auto;
  overflow: hidden;
  transform: scale(1);
  transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.image-zoom-effect:hover .image-holder {
  transform: scale(0.95);
}

.image-zoom-effect img {
  transform: scale(1);
  will-change: transform;
  transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  z-index: 0;
}

.image-zoom-effect:hover img {
  transform: scale(1.1);
}
</style>
@section('content')
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Izin Usaha<br></h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Izin Usaha<br></li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Us Section -->
<section id="about-us" class="section about-us">

    <div class="container">

        <div class="row gy-4" style="padding: 20px;">
            <div class="col-lg-6 banner-item image-zoom-effect">
                <div class="image-holder">
                  <a href="assets/img/izin/daftar_bidang.png">
                    <img src="assets/img/izin/daftar_bidang.png" width="540px" height="520px" alt="product" class="img-fluid">
                  </a>
                </div>
            </div>
            <div class="col-lg-6 banner-item image-zoom-effect">
                <div class="image-holder">
                  <a href="assets/img/izin/rin_klas_kual.png">
                    <img src="assets/img/izin/rin_klas_kual.png" width="540px" height="520px" alt="product" class="img-fluid">
                  </a>
                </div>
            </div>
            <div class="col-lg-6 banner-item image-zoom-effect">
                <div class="image-holder">
                  <a href="assets/img/izin/izin_usaha.png">
                    <img src="assets/img/izin/izin_usaha.png" alt="product" class="img-fluid">
                  </a>
                </div>
            </div>
            <div class="col-lg-6 banner-item image-zoom-effect">
                <div class="image-holder">
                  <a href="assets/img/izin/kta.png">
                    <img src="assets/img/izin/kta.png" alt="product" class="img-fluid">
                  </a>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Us Section -->


</main>
@endsection