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
        background-color: #a3318f;
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
    }

    .underline1 {
        width: 80px;
        height: 3px;
        background-color: #a3318f;
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
        /* Ganti dengan warna hover yang kamu inginkan */
    }

    /* Garis bawah saat hover */
    /* .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 2px;
            background-color: #ffc107;
            transition: width 0.3s ease;
        } */

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

    /* Menambahkan animasi halus (opsional) */
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
        border: 2px solid #a3318f;
        border-radius: 5px;
    }

    .amount-group {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .input-group-text {
        margin-top: 10px;
        height: 47.7px;
        padding: 10px !important;
        background-color: #eee !important;
        border: 2px solid #a3318f !important;
        border-radius: 5px 0 0 5px !important;
    }

    .amount-group input {
        flex: 1;
        padding: 10px;
        border: 2px solid #a3318f;
        border-left: none;
        border-radius: 0 5px 5px 0;
    }

    .donate-btn {
        background-color: #a3318f;
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
        background-color: #7a1f72;
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
</style>

@section('content')
    <section id="features" class="features section"
        style="background: linear-gradient(rgba(91, 91, 91, 0), rgba(0, 0, 0, 0)), url('../machine/image/gate.png') no-repeat center center/cover; padding: 80px 20px; margin-top: 70px; height: 500px;">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="200" class="col-lg-12 col-md-12 text-white"
                    style="align-content: center; text-align: center; margin-top: 120px;">
                    <h1 class="display-4"
                        style="font-size: 50px; color: #ffffff; font-family: 'Source Serif Pro', serif; text-shadow: 2px 2px 4px #000000;">
                        <b>Alumni and Friends Giving</b>
                    </h1>
                    <h1 class="display-4"
                        style="font-size: 20px; color: #ffffff; font-family: 'Source Serif Pro', serif; text-shadow: 2px 2px 4px #000000;">
                        <b>Home > Alumni and Friends Giving</b>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation-section" style="margin-top: -10px;">
        <h4 class="fw-bold" style="text-align: center; font-size: 25px;">Join Us and Enjoy Exclusive Membership Benefits!
        </h4>
        <div class="underline1"></div>
        <div class="mx-auto text-center mt-3" style="max-width: 1200px;">
            <p style="font-size: 20px;">
                Alumni of all Tsinghua University and Tsinghua Southeast Asia degree and non-degree programs now have the
                opportunity to join the Tsinghua SEA Center membership program and gain benefits including exclusive
                networking and VIP events.
                <br><b>Not a Tsinghua Alum?</b> No problem. Friends of the center are also invited to join hands with us and
                receive the same membership benefits while generously supporting our mission.
            </p>
        </div>

        <div class="container">
            <div class="container my-5">
                <div class="row">
                    <!-- Life Section (Kiri) -->
                    <div class="col-md-6 mb-4 box-main">
                        <div class="popular"></div>
                        <div class="section-title text-center">
                            <div class="donation-title" style="margin-top: 10px">Lifetime</div>
                            <div class="underline"></div>
                        </div>
                        <div class="row mt-3">
                            <!-- Life Alumni -->
                            <div class="col-md-6 col-6">
                                <div class="alumni-box">
                                    <div class="price"><b>$750</b></div>
                                    <div class="label">ALUMNI</div>
                                </div>
                                <form action="" method="GET">
                                    <div class="col-md-12 col-12 mt-3">
                                        <textarea class="form-control custom-amount" name="cohort" style="height: 80px; resize: none;"
                                            placeholder="Please type your cohort i.e HDX 2020 or Tsinghua EMBA 2012" required></textarea>
                                    </div>
                                    <button class="btn btn-join w-100 mt-4">JOIN</button>
                                    <!-- <a href="https://checkout-staging.xendit.co/od/lifetime-alumni"><button class="btn btn-join w-100 mt-4">JOIN</button></a> -->
                                </form>
                            </div>
                            <!-- Life Friends -->
                            <div class="col-md-6 col-6">
                                <div class="alumni-box">
                                    <div class="price"><b>$1000</b></div>
                                    <div class="label">FRIENDS</div>
                                </div>
                                <div class="container" style="height: 96px;"></div>
                                <a href="../Alumni-and-Friends-Giving/lifetime-friends/"><button
                                        class="btn btn-join w-100 mt-4">JOIN</button></a>
                                <!-- <a href="https://checkout-staging.xendit.co/od/lifetime-friends"><button class="btn btn-join w-100 mt-4">JOIN</button></a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Annual Section (Kanan) -->
                    <div class="col-md-6">
                        <div class="section-title text-center">
                            <div class="most-popular" style="background-color: white; margin-top: 5px;">.</div>
                            <div class="donation-title">Annual</div>
                            <div class="underline ms-auto"></div>
                        </div>
                        <div class="row mt-3">
                            <!-- Annual Alumni -->
                            <div class="col-md-6 col-6">
                                <div class="alumni-box">
                                    <div class="price"><b>$100</b></div>
                                    <div class="label">ALUMNI</div>
                                </div>
                                <form action="" method="GET">
                                    <div class="col-md-12 col-12 mt-3">
                                        <textarea class="form-control custom-amount" name="cohort" style="height: 80px; resize: none;"
                                            placeholder="Please type your cohort i.e HDX 2020 or Tsinghua EMBA 2012" required></textarea>
                                    </div>
                                    <button class="btn btn-join w-100 mt-4">JOIN</button>
                                    <!-- <a href="https://checkout-staging.xendit.co/od/annual-alumni"><button class="btn btn-join w-100 mt-4">JOIN</button></a> -->
                                </form>
                            </div>
                            <!-- Annual Friends -->
                            <div class="col-md-6 col-6">
                                <div class="alumni-box">
                                    <div class="price"><b>$75</b></div>
                                    <div class="label">FRIENDS</div>
                                </div>
                                <div class="container" style="height: 96px;"></div>
                                <a href="../Alumni-and-Friends-Giving/annual-friends/"><button
                                        class="btn btn-join w-100 mt-4">JOIN</button></a>
                                <!-- <a href="https://checkout-staging.xendit.co/od/annual-friends"><button class="btn btn-join w-100 mt-4">JOIN</button></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="donation-benefits" class="" style="margin-top: -50px;">
        <div class="container">
            <h2 class="section-title text-center">Benefits</h2>
            <hr style="height: 1.5px; background-color: #000000 !important;">

            <table class="table table-striped table-fix mt-4">
                <tbody>
                    <tr class="table-white">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Priority Access to
                            join the signature programs, events, and activities.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-gray">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Exclusive
                            Networking with distinguished alumni, fellows, faculty, and industry leaders at members-only
                            dinners and networking nights.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-white">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Collaboration
                            Opportunities with new initiatives and programs with Tsinghua SEA.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-gray">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Access
                            publications, research, and our alumni-fellow database.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-white">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Enjoy discounted
                            online courses, 10% off venue rentals, exclusive offers from industry partners, and curated
                            campus experiences.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-gray">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Post and discover
                            job opportunities within the community.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                    <tr class="table-white">
                        <td class="benefit-text" style="width: 750px; color: #231f54; font-size: 17px;">Vote on
                            initiatives that shape the future of the Center.</td>
                        <td class="check-icon text-center" style="font-size: 30px;">✔️</td>
                    </tr>
                </tbody>
            </table>

            <div class="donation-section text-center" style="margin-top: -10px;">
                <h4 style="text-align: center; font-size: 25px;"><b>Extend your impact - Donate anytime, in any amount!</b>
                </h4>
                <p style="font-size: 20px;">Your contribution is more than a gift — it's an investment in shared knowledge,
                    technology, and sustainable futures. By supporting Tsinghua SEA, you help amplify initiatives that
                    create long-term change and empower communities.</p>

                <div class="donation-container">
                    <form action="" method="post"
                        class="formm">
                        <input type="text" name="name" id="name" class="donation-input"
                            placeholder="Enter your name" required>
                        <input type="email" name="email" id="email" class="donation-input"
                            placeholder="Enter your email" required>
                        <div class="input-group amount-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="amount_usd" id="amount" class="donation-input"
                                placeholder="Enter a custom amount in Rupiah" required>
                        </div>
                        <input type="hidden" name="type_donation" value="Donation_Custome" readonly id="type_donation"
                            class="donation-input" placeholder="Enter your type" required>
                        <button type="submit" class="donate-btn">DONATE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
