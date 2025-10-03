@extends('layouts.main')

@section('title', 'Key of Success')

@section('content')
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Key of Success<br></h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Key of Success<br></li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Us Section -->
<section id="trainers-index" class="section trainers-index">

            <div class="container">

                <h2 data-aos="fade-up" data-aos-delay="100"><b>Key of Success</b></h2>

                <div class="row" style="margin-top: 40px;">


                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/mardiyono.png') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Ir. Mardiyono</h4>
                                <h6>President Director</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    25 years of experience in EPCM company serving as Construction
                                    Manager, Site Manager, Project Manager and Technical Derector in the
                                    fields of Oil and Gas LNG Plant and Petrochemical Plant, Refinery and
                                    power plant. Experience working in several Overseas Companies:<br>
                                    • ICE Petroleum Sdn Bhs, Malaysia<br>
                                    • Samsung Heavy Industri. Co. Ltd, Korea.<br>
                                    • PT. Winteco Corporation, Korea<br>
                                    • PT. Rutledge Singapore<br>
                                    • Chicago Bridge & Iron. Co.Ltd, (Indonesia)
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/indra.png') }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Indra B Cahyono ST.</h4>
                                <h6>Project Manager</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    15 years of experience in various projects as Drafting, Designing,
                                    Estimating, Bid preparation, Planning, Scheduling, Project Control,
                                    Project Management, Reporting, experience in the field of Engineering
                                    and Construction for Spherical Tanks, Atmospheric Tanks, Double Wall
                                    Tanks, Stell Structures, Pressure Vessels in Petrochemical Plant, Refinery
                                    and Power Plant environments.<br>
                                    and Power Plant environments.
                                    Experience working in several Overseas Companies:<br>
                                    • Samsung Heavy Industri. Co. Ltd, (Thailand).
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member" style="padding-top: 50px;">
                            <img src="{{ asset('assets/img/employee/yossi.png') }}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>Yossi Yulfikar Y ST.</h4>
                                <h6>Site Manager</h6>
                                <h6 style="text-align: justify; line-height: 1.5; margin-top: 15px;">
                                    10 years of experience in various projects as planning, scheduling,
                                    project control, reporting, experience in the field of engineering and
                                    construction as site manager for spherical tanks, atmospheric tanks,
                                    double wall tanks, steel structures, pressure vessels in Petrochemical
                                    Plant, Refinery and Power Plant environments.
                                </h6>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section> 


</main>
@endsection