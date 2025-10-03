<style>
    .carousel-caption .btn-get-start {
        font-size: 1rem;
        padding: 10px 20px;
        background-color: #00c0fe;
        color: white;
        border-radius: 5px;
    }

    .carousel-caption .btn-get-start:hover {
        background-color: #67d9ff;
    }

    .header .carousel-caption .btn-get-start {
        order: 2;
        margin: 0 15px 0 0;
    }

    @media (min-width: 992px) {
        .header .container-fluid {
            justify-content: space-between;
        }

        .navmenu {
            margin-left: 0;
            /* Hilangkan margin pada navmenu untuk desktop */
        }
    }

    .header .container-fluid {
        justify-content: space-between;
    }
</style>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="d-flex align-items-center">
                <img src="{{ asset('assets/img/logo/logopt-1.png') }}" height="75" alt="">
            </a>
        </div>

        <!-- Navbar -->
        <nav id="navmenu" class="navmenu ms-5"> <!-- Tambahkan margin-left (ms-5) agar tidak terlalu dekat -->
            <ul>
                <li><a href="{{ url('/') }}" class="{{ Request::is('/', 'company', 'iso-9001-2015-ym-teknik', 'iso-45001-2018-ym-teknik', 'iso-14001-2015-ym-teknik') ? 'active' : '' }} me-4">BERANDA<br></a></li>
                <li><a href="{{ url('/support-uid') }}" class="{{ Request::is('support-uid') ? 'active' : '' }} me-4">Support UID<br></a></li>
                <li class="dropdown"><a href="#"
                        class="{{ Request::is('about') ? 'active' : '' }} me-4"><span>ABOUT</span>
                        <iclass="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About
                                Company</a></li>

                        <li><a href="{{ url('/visi') }}" class="{{ Request::is('visi') ? 'active' : '' }}">Visi Misi</a></li>
                        <li><a href="{{ url('/policy') }}" class="{{ Request::is('policy') ? 'active' : '' }}">Our Policy</a></li>
                        <li><a href="{{ url('/penghargaan') }}" class="{{ Request::is('penghargaan') ? 'active' : '' }}">Penghargaan & Sertifikat</a></li>
                        <li><a href="{{ url('/izin') }}" class="{{ Request::is('izin') ? 'active' : '' }}">Izin Usaha</a></li>
                        <li><a href="{{ url('/key') }}" class="{{ Request::is('key') ? 'active' : '' }}">Key of Success</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"
                        class="{{ Request::is('engineering', 'procurement', 'construction', 'others') ? 'active' : '' }} me-4"><span>SERVICES</span>
                        <iclass="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/engineering') }}" class="{{ Request::is('engineering') ? 'active' : '' }} me-4">Engineering</a></li>
                        <li><a href="{{ url('/procurement') }}" class="{{ Request::is('procurement') ? 'active' : '' }} me-4">Procurement</a></li>
                        <li><a href="{{ url('/construction') }}" class="{{ Request::is('construction') ? 'active' : '' }} me-4">Construction</a></li>
                        {{-- <li><a href="{{ url('/others') }}" class="{{ Request::is('others') ? 'active' : '' }} me-4">Others</a></li>     --}}
                    </ul>
                </li>
                <li class="dropdown"><a href="#"
                    class="{{ Request::is('experience', 'pictures', 'pictures/electrical' , 'pictures/atmospheric', 'pictures/double', 'pictures/steel', 'pictures/sandlasting', 'pictures/piping') ? 'active' : '' }} me-4"><span>PROYEK</span>
                    <iclass="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="{{ url('/experience') }}" class="{{ Request::is('experience') ? 'active' : '' }} me-4">Experience List</a></li>
                    <li><a href="{{ url('/pictures') }}" class="{{ Request::is('pictures') ? 'active' : '' }} me-4">Pictures</a></li>
                </ul>
            </li>
                <li><a href="{{ url('/clients') }}" class="{{ Request::is('clients') ? 'active' : '' }} me-4">CLIENTS</a></li>
                {{-- <li><a href="{{ url('/') }}" class="me-4">KARIR</a></li> --}}
                <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }} me-4">CONTACT</a></li>
                <!-- <li><a href="{{ url('/news') }}" class="{{ Request::is('news') ? 'active' : '' }} me-4">NEWS</a></li> -->
                {{-- <li><a href="contact.html">LOREM</a></li>
                <li><a href="contact.html">IPSUM</a></li> --}}
                <a class="btn-getstarted" href="#">Get Started</a>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
