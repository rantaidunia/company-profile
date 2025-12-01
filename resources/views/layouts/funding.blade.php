@extends('layouts.main')

@section('title', 'Support UID')

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .section-title .donation-title {
        color: #6a1b9a;
        font-weight: bold;
        font-size: 1.5rem;
    }

    .section-title .underline {
        width: 60px;
        height: 3px;
        background-color: #15435a;
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
    }

    .underline1 {
        width: 80px;
        height: 3px;
        background-color: #15435a;
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
    }

    .most-popular {
        background-color: #7c7f8a;
        color: white;
        font-weight: bold;
        padding: 10px 0;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 10px;
    }

    /* .donation-box {
            border: 2px solid #6a1b9a;
            border-radius: 10px;
            padding: 20px;
            overflow: hidden;
            box-shadow: 0 4px 0 #9c27b0;
            background-color: white;
            text-align: center;
            margin-bottom: 10px;
        }

        .donation-box h3 {
            color: #6a1b9a;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .donation-type {
            background-color: #a3318f;
            color: white !important;
            font-weight: bold;
            padding: 5px;
            border-radius: 5px;
        } */

    .box-main {
        border-radius: 10px;
        background-color: #eff0f1;
        overflow: hidden;
        text-align: center;
        padding-top: 60px;
        /* ruang untuk label di atas */
        padding-bottom: 30px;
        padding-left: 20px;
        padding-right: 20px;
        position: relative;
    }

    /* Label ungu sebagai background penuh */
    .box-main::before {
        content: "MOST POPULAR";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background-color: #848d9e;
        color: white;
        font-weight: bold;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .alumni-box {
        border: 3px solid #a3318f;
        /* Ungu */
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 4px 0 #a3318f;
        /* Bayangan bawah ungu */
    }

    .alumni-box .price {
        padding: 30px 0;
        font-size: 2rem;
        color: #512da8;
        /* Ungu lebih gelap */
        background-color: white;
    }

    .alumni-box .label {
        background-color: #a3318f;
        color: white;
        font-weight: bold;
        padding: 10px 0;
        font-size: 1rem;
    }

    .btn-join {
        background-color: #3f51b5;
        color: white;
        font-weight: bold;
        margin-top: 10px;
    }

    /* box */

    .donation-section {
        padding: 50px 15px;
        text-align: center;
    }

    .donation-box {
        border: 2px solid #e1e1e1;
        border-radius: 10px;
        padding: 20px;
        margin: 15px 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .donation-box h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .donation-price {
        font-size: 2rem;
        font-weight: bold;
        color: #5e2c83;
    }

    .donation-type {
        font-weight: bold;
        color: #5e2c83;
        margin-top: 10px;
    }

    .btn-join {
        margin-top: 15px;
        background: #5e2c83 !important;
        color: #fff !important;
        font-weight: bold;
        border-radius: 8px;
    }

    .btn-join:hover {
        background: #4a2569 !important;
    }

    .custom-input {
        margin: 20px 0;
    }

    .benefit-table th {
        color: #5e2c83;
    }

    .benefit-table td {
        vertical-align: middle;
    }

    @media(max-width:768px) {
        .hero h1 {
            font-size: 1.8rem;
        }

        .donation-price {
            font-size: 1.5rem;
        }
    }

    /* Header */
    .navbar {
        background-color: #a3318f;
    }

    .navbar-nav .nav-link {
        color: white !important;
        font-weight: bold;
        margin: 0 12px;
        /* jarak antar menu */
        position: relative;
        transition: color 0.3s;
        display: inline-flex;
        align-items: center;
        height: 90px;
    }

    .navbar-nav .nav-link:hover {
        color: #A3316F !important;
    }

    .navbar-nav .dropdown-menu {
        background-color: #f1f1f1ff;
    }

    .navbar-nav .dropdown-menu .dropdown-item {
        color: #272727ff;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: rgba(167, 167, 167, 1);
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .form-section {
        padding: 50px 20px;
    }

    .btn-outline-light {
        align-content: center;
        height: 50px;
        font-size: 17px;
        border: 1px solid white !important;
        /* border putih */
        background-color: transparent !important;
        border-color: solid #e5e7eb !important;
        width: 100%;
        border: 1px black;
        color: white;
    }

    .btn {
        height: 50px;
        font-size: 17px;
        background-color: #4c3897;
        width: 100%;
        border: 1px black;
        color: white;
    }

    .btn:hover {
        height: 50px;
        background-color: #6c757d;
        color: white;
    }   

    .btn:active {
        background-color: #6c757d !important;
        color: white !important;
    }

    .form-control {
        height: 50px;
    }

    .konten {
        width: 100%;
        max-width: 60%;
        padding: 40px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        margin-top: 110px !important;
        margin-bottom: 30px !important;
        border-radius: 5px !important;
    }

    .logoo {
        width: 1000px;
    }

    @media (max-width: 576px) {
        .konten {
            width: 100%;
            max-width: 95%;
            padding: 25px;
        }

        .logoo {
            width: 280px;
        }
    }

    /* Tampilkan dropdown saat hover */
    .dropdown-hover:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    /* Menambahkan animasi halus*/
    .dropdown-menu {
        transition: all 0.2s ease-in-out;
    }

    /* Untuk menghindari klik tetap membuka menu */
    .dropdown-toggle::after {
        display: inline-block;
    }

    input::placeholder {
        color: rgb(182, 182, 182) !important;
        opacity: 1;
    }

    .donation-card {
        max-width: 900px;
        /* margin: 40px auto; */
        padding: 30px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
    }

    .donation-buttons .btn.active .btn {
        margin: 6px 6px 0 0;
    }

    .payment-card {
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 16px;
        text-align: center;
        transition: .2s;
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
        /* biar img di atas, teks di bawah */
        align-items: center;
        /* center secara horizontal */
        justify-content: center;
        /* center secara vertical */
        /* supaya rata dalam card */
        transition: all 0.3s ease;
    }

    .payment-card img {
        height: 60px;
        /* seragam */
        object-fit: contain;
        margin-bottom: 10px;
    }

    .btn-check:checked+.payment-card {
        border-color: #a3318f;
        box-shadow: 0 6px 16px #A3316F;
    }

    .impact-btn {
        background: #ff6600;
        border: none;
        padding: 12px 20px;
        font-size: 17px;
        font-weight: 700;
        border-radius: 7px;
        color: #fff;
        width: 100%;
        margin-top: 20px;
    }

    .impact-btn:hover {
        background: rgba(255, 102, 0, 0.78);
        border: none;
        padding: 12px 20px;
        font-size: 17px;
        font-weight: 700;
        border-radius: 7px;
        color: #fff;
        width: 100%;
        margin-top: 20px;
    }

    .impact-text {
        margin-top: 14px;
        font-size: 14px;
        color: #555;
    }

    .custom-amount {
        font-size: 16px;
        line-height: 1.4;
        padding: 12px;
        overflow-y: auto;
        border-radius: 8px;
        box-sizing: border-box;
    }

    /* Placeholder agar bisa wrap */
    .custom-amount::placeholder {
        white-space: pre-wrap;
    }

    /* Section tabel */
    .section-title {
        color: #92278F;
        font-weight: bold;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .benefit-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ddd;
    }

    .benefit-item:last-child {
        border-bottom: none;
    }

    .benefit-text {
        font-size: 0.95rem;
        color: #333;
        flex: 1;
        margin-right: 10px;
    }

    .check-icon {
        color: #4a4aef;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .donation-section {
        text-align: center;
        margin-top: 40px;
    }

    .donation-section h5 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .donation-section p {
        font-size: 0.95rem;
        color: #333;
        /* max-width: 600px; */
        margin: 0 auto 20px;
    }

    .donation-container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* min-height: 100vh; */
    }

    .formm {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .donation-input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 2px solid #15435a;
        border-radius: 5px;
        box-sizing: border-box;
        resize: none;
        white-space: normal;   
        overflow-wrap: break-word;
    }

    .amount-group {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .input-group-text {
        margin-top: 10px;
        height: 47px;
        padding: 10px !important;
        background-color: #eee !important;
        border: 2px solid #15435a !important;
        border-radius: 5px 0 0 5px !important;
    }

    .amount-group input {
        flex: 1;
        padding: 10px;
        border: 2px solid #15435a;
        border-left: none;
        border-radius: 0 5px 5px 0;
    }

    .donate-btn {
        background-color: #15435a;
        margin-top: 20px;
        width: 100%;
        color: white;
        font-weight: bold;
        padding: 12px 30px;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .donate-btn:hover {
        background-color:rgb(1, 41, 100);
    }

    /* Pastikan ini ditaruh setelah Bootstrap atau di file CSS terpisah */
    .table-striped.table-fix tbody tr:nth-of-type(odd) {
        background-color: #ffffff !important;
        /* Putih */
    }

    .table-striped.table-fix tbody tr:nth-of-type(even) {
        background-color: #f8f9fa !important;
        /* Abu Bootstrap */
    }

    .table-fix tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    .fade-wrapper {
    position: relative;
    max-height: 3.2em; /* ~2 lines */
    overflow: hidden;
    }

    .fade-text {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #ffffff;
    }

    .fade-overlay {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    height: 1.5em;
    width: 100%;
    background: linear-gradient(to bottom, rgba(21, 67, 90, 0), #15435a 95%);
    pointer-events: none;
    }

    /* Read More below faded text */
    .read-more-btn {
    display: inline-block;
    margin-top: 6px;
    font-size: 0.9rem;
    color: #ffffff;
    text-decoration: underline;
    transition: opacity 0.2s;   
    }

    .read-more-btn:hover {
    opacity: 0.8;
    }

    @media (max-width: 992px) {
  .president-section .row {
    flex-direction: column;
    text-align: center;
  }

  .president-section img {
    width: 100%;
    height: auto;
    object-fit: cover;
    max-height: 300px;
  }

  .president-section .col-md-8 {
    padding: 1.5rem !important;
  }

  .president-section p {
    font-size: 0.95rem !important;
    line-height: 1.6 !important;
  }
}

@media (max-width: 576px) {
  .president-section img {
    max-height: 220px;
  }

  .president-section p {
    font-size: 0.9rem !important;
    line-height: 1.5 !important;
  }

  .president-section h5 {
    font-size: 1rem !important;
  }

  .president-section p.text-light {
    font-size: 0.85rem !important;
  }
}

@media (max-width: 992px) {
    .president-section .card {
      height: auto !important;
    }

    .president-section .row {
      flex-direction: column;
      text-align: center;
      height: auto !important;
    }

    .president-section .col-md-4,
    .president-section .col-md-8 {
      height: auto !important;
    }

    .president-section img {
      height: auto !important;
      max-height: 280px;
      object-fit: contain !important;
    }

    .president-section p.fst-italic {
      max-height: none !important;
      overflow: visible !important;
    }
  }

  @media (max-width: 576px) {
    .president-section img {
      max-height: 200px !important;
    }

    .president-section p.fst-italic {
      font-size: 0.9rem !important;
      line-height: 1.5 !important;
    }

    .president-section h5 {
      font-size: 1rem !important;
    }

    .president-section p.text-light {
      font-size: 0.85rem !important;
    }
  }

    .support-card {
    background-color: #1c4d64;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 100%; /* Changed from fixed width */
    max-width: 1300px; /* Added max-width */
  }

  .support-card {
  display: flex;
  align-items: center;
  gap: 2rem;
  background-color: #1c4d64;
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  overflow: visible;
  width: 100%;
  max-width: 1300px;
  margin: 2rem auto; /* adds breathing space, avoids cropping */
  padding: 2rem;
}

.support-card img {
  width: 550px; /* Fixed width for consistency */
  height: 300px; /* Fixed height for consistency */
  object-fit: cover;
  border-radius: 10px;
  flex-shrink: 0;
}

.support-text {
  flex: 1;
}

.support-text h5 {
  font-size: 1.2rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 0.4rem;
}

.support-text .underline {
  width: 30%;
  height: 1.5px;
  background-color: rgba(255, 255, 255, 0.6);
  margin-bottom: 1rem;
}

.support-text p {
  font-size: 1rem;
  line-height: 1.6;
  color: #fff;
  margin: 0;
}

.ways-support-section {
  background-color: #fff;
  padding: 3rem 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2.5rem;
}

/* Tablet breakpoint */
@media (max-width: 1024px) {
  .support-card {
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 90%;
    padding: 1.5rem;
  }

  .support-card img {
    width: 100%;
    height: auto;
    max-width: 100%;
  }

  .support-text {
    margin-top: 1rem;
  }

  .support-text .underline {
    width: 60%;
    margin: 0.5rem auto 1rem;
  }
}

/* Mobile breakpoint */
@media (max-width: 600px) {
  .ways-support-section {
    padding: 2rem 1rem;
    gap: 2rem;
  }

  .support-card {
    padding: 1rem;
    border-radius: 12px;
    width: 100%; /* Full width on mobile */
  }

  .support-text h5 {
    font-size: 1.1rem;
  }

  .support-text p {
    font-size: 0.95rem;
    line-height: 1.6;
  }

  .support-card img {
    width: 100%;
    height: auto;
  }
}

.flagship-section {
  background-color: #154a5b;
  text-align: center;
  padding: 4rem 2rem;
}

.flagship-section h2 {
  color:rgb(254, 254, 254);
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 2rem;
}

.carousel-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.flagship-carousel {
  overflow-x: auto;
  scroll-behavior: smooth;
  scrollbar-width: none;
  display: flex;
  gap: 1.5rem;
  padding: 0 80px;
}

.flagship-carousel::-webkit-scrollbar {
  display: none;
}

.program-card {
  position: relative;
  flex: 0 0 250px;
  height: 350px;
  border-radius: 14px;
  overflow: hidden;
  background-color: #fff;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  cursor: pointer;
  transition: transform 0.3s ease;
}

.program-card:hover {
  transform: scale(1.03);
}

.program-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.program-title {
  position: absolute;
  bottom: 16px;
  left: 16px;
  right: 16px;
  color: #fff;
  font-size: 1.3rem;
  font-weight: 700;
  text-align: left;
  text-shadow: 0 2px 8px rgba(0,0,0,0.6);
}

.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: #fff;
  color: #1c3442;
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  font-size: 1.5rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  cursor: pointer;
  z-index: 10;
}

.arrow.left {
  left: 30px;
}

.arrow.right {
  right: 30px;
}

.arrow:hover {
  background-color: #f0f0f0;
}

/* ✅ Responsive Fixes */
@media (max-width: 992px) {
  .flagship-carousel {
    gap: 1rem;
  }
  .program-card {
    flex: 0 0 200px;
    height: 300px;
  }
}

@media (max-width: 600px) {
  .flagship-section {
    padding: 2rem 1rem;
  }
  .program-card {
    flex: 0 0 180px;
    height: 260px;
  }
  .program-title {
    font-size: 1.1rem;
  }
  .arrow {
    display: none;
  }
}

.partners-section {
  text-align: center;
  padding: 4rem 2rem;
  background-color: #fff;
}

.partners-section h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #153a4d;
  margin-bottom: 0.5rem;
}

.partners-section p {
  color: #333;
  max-width: 700px;
  margin: 0 auto 3rem auto;
  line-height: 1.5;
}

/* Carousel container */
.logo-carousel {
  overflow: hidden;
  width: 100%;
  position: relative;
}

/* Scrolling track */
.logo-track {
  display: flex;
  gap: 4rem;
  width: max-content;
  animation: scrollLoop 40s linear infinite;
}

/* Pause animation when hovering anywhere on carousel */
.logo-carousel:hover .logo-track {
  animation-play-state: paused;
}

/* Logos */
.logo-carousel img {
  height: 90px;
  object-fit: contain;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.logo-carousel img:hover {
  transform: scale(1.1);
  opacity: 0.9;
}

/* Smooth infinite scroll */
@keyframes scrollLoop {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* Responsive tweaks */
@media (max-width: 768px) {
  .logo-carousel img {
    height: 60px;
  }

  .logo-track {
    gap: 2rem;
    animation-duration: 25s;
  }
}
</style>

@section('content')
    <section id="features" class="features section"
        style="background: linear-gradient(rgba(91, 91, 91, 0), rgba(0, 0, 0, 0)), url('{{ asset('assets/UIDBC.jpg') }}') no-repeat center center/cover; padding: 80px 20px; margin-top: 10px; height: 500px;">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="200" class="col-lg-12 col-md-12 text-white"
                    style="align-content: center; text-align: center; margin-top: 120px;">
                    <h1 class="display-4"
                        style="font-size: 50px; color: #ffffff; font-family: 'Montserrat', montserrat; text-shadow: 2px 2px 4px #000000;">
                        <b>Donate to United In Diversity</b>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="intro-section py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <p class="text-center mb-0" style="font-size: 1.15rem; line-height: 1.9; color: #333; font-weight: 400;">
                        Since 2003, <strong style="color: #154a5b;">United In Diversity (UID)</strong> has been dedicated to accelerating systemic transformation in Indonesia toward sustainable, just, and inclusive development. We believe that solutions to complex challenges, such as inequality, climate issues, and governance, require ecosystem consciousness-based leadership and cross-sector collaboration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="flagship-section">
  <h2>Support Our Flagship Programs</h2>

  <!-- Wrapper for arrows + carousel -->
  <div class="carousel-wrapper">
    <button class="arrow left">&#10094;</button>

    <div class="flagship-carousel">
        <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/ideas-asia-pacific'">
          <img src="assets/IDEASAP.jpg" alt="IDEAS Asia Pacific">
          <div class="program-title">IDEAS Asia Pacific</div>
        </div>
      
      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/bekal-pemimpin'">
        <img src="assets/bekal.jpg" alt="BEKAL Pemimpin">
        <div class="program-title">BEKAL Pemimpin</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/co-class'">
        <img src="assets/coclass.jpg" alt="Co-class">
        <div class="program-title">Co-class</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/lentera-indonesia'">
        <img src="assets/lentera.jpg" alt="Lentera Indonesia">
        <div class="program-title">Lentera Indonesia</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/youth-action-forum'">
        <img src="assets/YAF.jpg" alt="Youth Action Forum">
        <div class="program-title">Youth Action Forum</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/leans'">
        <img src="assets/LEANS.jpg" alt="LEANS">
        <div class="program-title">LEANS</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/public-speaking-bootcamp-spark'">
        <img src="assets/psbc.jpg" alt="Public Speaking Bootcamp (SPARK)">
        <div class="program-title">Public Speaking Bootcamp (SPARK)</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/happy-digital-x'">
        <img src="assets/hdx.jpg" alt="Happy Digital X">
        <div class="program-title">Happy Digital X</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/ideas-indonesia-1'">
        <img src="assets/IDEASID.jpg" alt="IDEAS Indonesia">
        <div class="program-title">IDEAS Indonesia</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/leads'">
        <img src="assets/leads.jpg" alt="LEADS">
        <div class="program-title">LEADS</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/heal'">
        <img src="assets/heal.jpg" alt="HEAL">
        <div class="program-title">HEAL</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/systems-leadership-capacity-building-slcb-for-folur'">
        <img src="assets/slcb.jpg" alt="Systems Leadership Capacity Building (SLCB)">
        <div class="program-title">Systems Leadership Capacity Building (SLCB)</div>
      </div>

      <div class="program-card" onclick="window.location.href='https://www.unitedindiversity.org/programs/learning-leadership-development-program-for-protected-area-manager-l2dp-pam'">
        <img src="assets/lldp.jpg" alt="Learning Leadership Development Program for Protected Area Managers")">
        <div class="program-title">Learning Leadership Development Program for Protected Area Managers</div>
      </div>
    </div>

    <button class="arrow right">&#10095;</button>
  </div>
</section>

    <!-- Ways You Can Support UID -->
    <section class="ways-support-section py-5" style="background-color: #ffffff;">
    <div class="container">

        <!-- Impact Donations -->
        <div class="support-card d-flex flex-column flex-md-row align-items-center p-4 rounded-4 mb-4">
        <div class="support-image me-md-4 mb-3 mb-md-0">
            <img src="{{ asset('assets/UIDBC.jpg') }}" alt="Impact Donations" class="img-fluid rounded-3">
        </div>
        <div class="support-text">
            <h5 class="fw-bold mb-2 text-white">Impact Donations</h5>
            <div class="underline"></div>
            <p class="mt-3 mb-0 text-white">
            An Impact Donation is a transformational gift that supports United In Diversity’s mission
            while giving donors lasting recognition, exclusive benefits, and the opportunity to shape the Foundation’s future.
            </p>
        </div>
        </div>

        <!-- Fund UID Programs -->
        <div class="support-card d-flex flex-column flex-md-row align-items-center p-4 rounded-4 mb-4">
        <div class="support-image me-md-4 mb-3 mb-md-0">
            <img src="{{ asset('assets/fund.jpeg') }}" alt="Fund UID Programs" class="img-fluid rounded-3">
        </div>
        <div class="support-text">
            <h5 class="fw-bold mb-2 text-white">Fund UID Programs</h5>
            <div class="underline"></div>
            <p class="mt-3 mb-0 text-white">
            UID Programs span from sustainable leadership and capacity building initiatives, such as IDEAS, BEKAL, Co-Class, Sparks, and more.
            </p>
        </div>
        </div>

        <!-- Curate and Co-create -->
        <div class="support-card d-flex flex-column flex-md-row align-items-center p-4 rounded-4 mb-4">
        <div class="support-image me-md-4 mb-3 mb-md-0">
            <img src="{{ asset('assets/curate.jpeg') }}" alt="Curate and Co-create" class="img-fluid rounded-3">
        </div>
        <div class="support-text">
            <h5 class="fw-bold mb-2 text-white">Curate and co create your program with UID</h5>
            <div class="underline"></div>
            <p class="mt-3 mb-0 text-white">
            Do you have your existing program? UID provides long-term consultation to curate and co-create your program for greater impact.
            </p>
        </div>
        </div>

        <!-- Endowment -->
        <div class="support-card d-flex flex-column flex-md-row align-items-center p-4 rounded-4 mb-4">
        <div class="support-image me-md-4 mb-3 mb-md-0">
            <img src="{{ asset('assets/endow.jpg') }}" alt="Curate and Co-create" class="img-fluid rounded-3">
        </div>
        <div class="support-text">
            <h5 class="fw-bold mb-2 text-white">Endowment</h5>
            <div class="underline"></div>
            <p class="mt-3 mb-0 text-white">
            Endowments ensure that your contribution continues to generate impact year after year. With only a portion of the investment returns used annually, your gift lives on in perpetuity-supporting scholarships, research, and initiatives that transform Southeast Asia and beyond.
            </p>
        </div>
        </div>
    </div>
    </section>

<section class="partners-section">
  <h2>Partners & Collaborations</h2>
  <p>
    Together, We Forge Strong Partnerships to Build a Sustainable and Better Future for All
  </p>

  <div class="logo-carousel">
    <div class="logo-track">
      <!-- Original Set -->
      <a href="https://lan.go.id" target="_blank"><img src="assets/lanri.jpg" alt="LAN RI" /></a>
      <a href="https://www.tsinghua.edu.cn/en/" target="_blank"><img src="assets/tuniversity.jpg" alt="Tsinghua University" /></a>
      <a href="instagram.com/tsinghua_sea/?hl=en" target="_blank"><img src="assets/tsea.jpg" alt="Tsinghua University Southeast Asia" /></a>
      <a href="https://sdgnetworksea.org/" target="_blank"><img src="assets/sdsn.png" alt="SDSN Southeast Asia" /></a>
      <a href="https://www.thkforum.org/" target="_blank"><img src="assets/thk.png" alt="THK Reflection" /></a>
      <a href="https://www.packard.org/" target="_blank"><img src="assets/packard.png" alt="Packard Foundation" /></a>
      <a href="https://www.mit.edu/" target="_blank"><img src="assets/mit.png" alt="MIT" /></a>
      <a href="https://rmi.org/" target="_blank"><img src="assets/rmi.png" alt="RMI" /></a>
      <a href="https://tieindonesia.org/" target="_blank"><img src="assets/tie.png" alt="TIE" /></a>
      <a href="https://www.unsdsn.org/" target="_blank"><img src="assets/sdsnun.png" alt="SDSN UN" /></a>
      <a href="https://www.ui.ac.id/" target="_blank"><img src="assets/idk.png" alt="Universitas Indonesia" /></a>

      <!-- Duplicated for seamless looping -->
      <a href="https://lan.go.id" target="_blank"><img src="assets/lanri.jpg" alt="LAN RI" /></a>
      <a href="https://www.tsinghua.edu.cn/en/" target="_blank"><img src="assets/tuniversity.jpg" alt="Tsinghua University" /></a>
      <a href="#" target="_blank"><img src="assets/tsea.jpg" alt="Tsinghua University Southeast Asia" /></a>
      <a href="https://sdgnetworksea.org/" target="_blank"><img src="assets/sdsn.png" alt="SDSN Southeast Asia" /></a>
      <a href="#" target="_blank"><img src="assets/thk.png" alt="THK Reflection" /></a>
      <a href="https://www.packard.org/" target="_blank"><img src="assets/packard.png" alt="Packard Foundation" /></a>
      <a href="https://www.mit.edu/" target="_blank"><img src="assets/mit.png" alt="MIT" /></a>
      <a href="https://rmi.org/" target="_blank"><img src="assets/rmi.png" alt="RMI" /></a>
      <a href="#" target="_blank"><img src="assets/tie.png" alt="TIE" /></a>
      <a href="https://www.unsdsn.org/" target="_blank"><img src="assets/sdsnun.png" alt="SDSN UN" /></a>
      <a href="https://www.ui.ac.id/" target="_blank"><img src="assets/idk.png" alt="Universitas Indonesia" /></a>
    </div>
  </div>
</section>


    <!-- President's Words Section -->
<section class="president-section py-3 bg-white" style="margin-top: 20px;">
  <div class="container">
    <div class="card border-0 shadow rounded-4 mx-auto overflow-hidden"
         style="max-width: 1300px; width: 100%; background-color: #15435a; height: 300px;">
      <div class="row g-0 align-items-center h-100">
        
        <!-- Image -->
        <div class="col-md-4 h-100 d-flex align-items-center justify-content-center"
             style="background-color: #15435a;">
          <img src="{{ asset('assets/Tantowi.jpeg') }}" alt="President"
               class="img-fluid h-100 w-100 rounded-0"
               style="object-fit: contain; object-position: left;">
        </div>

        <!-- Content -->
        <div class="col-md-8 text-white d-flex flex-column justify-content-center p-4"
             style="height: 100%; overflow: hidden;">
          <p class="fst-italic mb-3"
             style="font-size: 0.95rem; line-height: 1.5; max-height: 120px; overflow: hidden;">
            “In a world facing growing challenges from the climate crisis and inequality to a loss of trust, 
            United In Diversity (UID) believes lasting change begins with trust, collaboration, and shared awareness. 
            For over twenty years, UID has brought together leaders from government, business, academia, and civil society 
            to co-create solutions that bridge differences and inspire transformation. Your support is more than a donation. 
            It is a commitment to a future where leadership is compassionate, communities thrive with nature, 
            and diversity is our greatest strength.”
          </p>

          <h5 class="fw-bold mb-1 text-white">Amb Tantowi Yahya</h5>
          <p class="mb-0 text-light opacity-75" style="font-size: 0.9rem;">
            President, United In Diversity Foundation
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Inquiries Section -->
    <section class="inquiry-section py-4 bg-white">
    <div class="container text-center">
        <a href="mailto:contact@unitedindiversity.org"
        class="text-decoration-none"
        style="color: inherit;">
        <div class="mx-auto px-4 py-3 rounded-4 shadow-sm"
            style="background-color: #15435a; color: white; max-width: 400px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <p class="mb-0" style="font-size: 1rem; line-height: 1.4;">
            For inquiries, please contact:<br>
            <strong>contact@unitedindiversity.org</strong>
            </p>
        </div>
        </a>
    </div>
    </section>
@endsection

<script>
document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.flagship-carousel');
  const leftArrow = document.querySelector('.arrow.left');
  const rightArrow = document.querySelector('.arrow.right');

  if (!carousel || !leftArrow || !rightArrow) return;

  function getScrollAmount() {
    const card = carousel.querySelector('.program-card');
    if (!card) return 300;
    const gap = parseInt(getComputedStyle(carousel).gap) || 24;
    return card.offsetWidth + gap;
  }

  leftArrow.addEventListener('click', () => {
    carousel.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
  });

  rightArrow.addEventListener('click', () => {
    carousel.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
  });

  function updateArrows() {
    const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth - 1;
    leftArrow.style.opacity = carousel.scrollLeft <= 2 ? '0.4' : '1';
    rightArrow.style.opacity = carousel.scrollLeft >= maxScrollLeft ? '0.4' : '1';
  }

  carousel.addEventListener('scroll', updateArrows, { passive: true });
  window.addEventListener('resize', () => setTimeout(updateArrows, 100));
  setTimeout(updateArrows, 100);
});
</script>
