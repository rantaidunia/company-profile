<style>
    a.pdf h4 {
        color: #00c0fe !important;
    }

    a.pdf:hover h4 {
        color: #5dd7ff !important;
    }

    a.pdf:active h4 {
        color: #5dd7ff !important;
    }

    .footer-contact p {
        display: flex;
        /* Gunakan flexbox untuk mengatur ikon dan teks */
        align-items: center;
        /* Vertikal align */
    }

    .footer .social-links p a {
        display: flex;
        /* Agar lingkaran sesuai dengan ikon */
        justify-content: center;
        /* Pusatkan ikon di dalam lingkaran */
        align-items: center;
        /* Pusatkan secara vertikal di lingkaran */
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #00c0fe;
        /* Warna lingkaran */
        font-size: 16px;
        color: #00c0fe;
        /* Warna ikon */
        margin-right: 10px;
        transition: 0.3s;
        text-decoration: none;
        /* Hilangkan underline pada link */
    }

    .footer .social-links p a:hover {
        color: var(--default-color);
        /* Warna ikon saat hover */
        border-color: var(--default-color);
        /* Warna border saat hover */
    }

    .footer .social-links p span {
        font-size: 16px;
        /* Ukuran teks */
        color: var(--default-color);
        /* Warna teks */
    }
</style>

<footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about" style="text-align: justify;">
                <h6 class="sitename" style="line-height: 1.7;">PT. Yakin Makmur Teknik a privately
                    owned Indonesian company, We are fully
                    established and experienced in design
                    engineering and construction of steel,
                    piping, electrical & instrument. The
                    company is located in Jakarta with a
                    combined expatriates and Indonesian
                    team of highly motivated and experienced
                    specialist, managers and engineers equipped with the
                    latest computer software and technology
                    to meet the highest International codes
                    and standards.</h6>
                <div class="footer-contact pt-3 social-links">
                    <p class="mt-1">
                        <a href=""><i class="bi bi-telephone-fill"></i></a>
                        <span>0267 - 8407445</span>
                    </p>
                    <p>
                        <a href=""><i class="bi bi-envelope"></i></a>
                        <span>info@example.com</span>
                    </p>
                </div>

                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Experience</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Head Office</h4>
                <p>Ruko Broadway Galuh Mas III / 11 Sukaharja Teluk Jambe Timur Karawang 41361 <br>Phone: 0267-8407445
                </p>
                <h4>Workshop</h4>
                <p>Jl. Raya Kosambi Telaga Sari No.56 Karawang
                    <br>Phone: 0267-8631172
                </p>
                <a href="{{ asset('assets/pdf/Company Profile PT. YMT.pdf') }}" class="pdf">
                    <h4><i class="bi bi-download"></i> Download Company Profile</h4>
                </a>
                {{-- <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                            value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form> --}}
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>Copyright <span>© 2024</span> <strong class="px-1 sitename">PT Yakin Makmur Teknik</strong> <span>All Rights
                Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            <!-- Developer by <a href="#">RR Technology</a> -->
        </div>
    </div>

</footer>
