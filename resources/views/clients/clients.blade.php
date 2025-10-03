@extends('layouts.main')

@section('title', 'Clients - PT Yalin Makmur Teknik')

<style>
    .breadcrumbs .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .breadcrumbs h1 {
        margin: 0;
    }

    .breadcrumbs ol {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumbs ol li {
        margin-left: 10px;
    }

    .breadcrumbs ol li a {
        text-decoration: none;
    }

    .img-boxx {
        border: 1px solid #cccccc5e;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>

@section('content')
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <h2><b>Clients</b></h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Clients<br></li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="trainers-index" class="section trainers-index">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="memberr position-relative">
                        <img src="{{ asset('assets/img/clients/pertamina2.png') }}" class="img-fluid img-boxx"
                            alt="">
                        {{-- <a href="{{ url('/engineering') }}" class="btn-overlay"><b>ENGINEERING</b></a> --}}
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="memberr position-relative">
                        <img src="{{ asset('assets/img/clients/jade.png') }}" class="img-fluid img-boxx" alt="">
                        {{-- <a href="{{ url('/procurement') }}" class="btn-overlay"><b>PROCUREMENT</b></a> --}}
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex mt-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="memberr position-relative">
                        <img src="{{ asset('assets/img/clients/lote.png') }}" class="img-fluid img-boxx" alt="">
                        {{-- <a href="{{ url('/construction') }}" class="btn-overlay"><b>CONSTRUCTION</b></a> --}}
                    </div>
                </div>
                <!-- End Team Member -->
            </div>
        </div>
    </section>
@endsection
