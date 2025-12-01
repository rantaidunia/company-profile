<style>
    .custom-footer {
    background: #0f3b52;
    color: #fff;
    font-size: 15px;
}

.footer-logo {
    height: 55px;
}

/* Section Titles */
.footer-title,
.footer-about-title {
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 15px;
    color: #fff;
    position: relative;
    padding-bottom: 8px;
}

/* Yellow underline */
.footer-title::after,
.footer-about-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 35px;
    height: 3px;
    background: #f4a51c; /* yellow underline */
}

/* Links */
.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #ffffff;
    text-decoration: none;
    transition: 0.3s;
}

.footer-links a:hover {
    color: #f4a51c;
}

/* Contact & Address */
.footer-contact-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #fff;
}

.footer-address {
    display: flex;
    gap: 8px;
    color: #fff;
    margin-bottom: 12px;
}

/* Social icons */
.footer-social a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    margin-right: 8px;
    border-radius: 50%;
    border: 1px solid #fff;
    color: #fff;
    font-size: 18px;
    transition: 0.3s;
}

.footer-social a:hover {
    background: #fff;
    color: #0f3b52;
}

/* Bottom bar */
.footer-bottom {
    color: #ffffff;
    font-size: 14px;
    margin-top: 30px;
}

@media (max-width: 768px) {
    .custom-footer {
        text-align: center;
    }

    .footer-title::after,
    .footer-about-title::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .footer-contact-item,
    .footer-address {
        justify-content: center;
    }
}
</style>

<footer class="custom-footer">
    <div class="container py-5">
        <div class="row gy-4">

            <!-- Logo + Contact + Addresses -->
            <div class="col-lg-4 col-md-6">
                <img src="assets/white.png" alt="Logo" class="footer-logo mb-3">

                <p class="footer-contact-item">
                    <i class="bi bi-telephone-fill"></i> +622613521928
                </p>

                <p class="footer-contact-item">
                    <i class="bi bi-envelope-fill"></i> contact@unitedindiversity.org
                </p>

                <h5 class="footer-about-title mt-4">UID Learning Hub Jakarta</h5>
                <p class="footer-address">
                    <i class="bi bi-geo-alt-fill"></i>
                    Jl. Hayam Wuruk No.28, RT.14/RW.1, Kb. Klp.,  
                    Kecamatan Gambir, Kota Jakarta Pusat, DKI Jakarta 10120
                </p>

                <h5 class="footer-about-title mt-4">UID Bali Campus</h5>
                <p class="footer-address">
                    <i class="bi bi-geo-alt-fill"></i>
                    Kura Kura Bali SEZ, Serangan,  
                    Denpasar Selatan, Bali 80229, Indonesia
                </p>
            </div>

            <!-- Privacy (moved here) -->
            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Privacy</h5>
                <ul class="footer-links">
                    <li><a href="https://www.unitedindiversity.org/terms-of-use">Terms of Use</a></li>
                    <li><a href="https://www.unitedindiversity.org/privacy-policy">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)">Cookie Setting</a></li>
                </ul>
            </div>

            <!-- Quick Links (moved here) -->
            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="https://www.unitedindiversity.org/about-us">About UID</a></li>
                    <li><a href="https://www.unitedindiversity.org/programs">Programs</a></li>
                    <li><a href="https://event.unitedindiversity.org/">Events</a></li>
                    <li><a href="https://fellows.unitedindiversity.org/">UID Fellows</a></li>
                    <li><a href="https://www.unitedindiversity.org/collaborate-with-UID">Collaborate</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="col-lg-4 col-md-12">
                <h5 class="footer-title">Follow Us</h5>

                <div class="footer-social">
                    <a href="https://www.linkedin.com/company/uidindonesia/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/uidindonesia/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://x.com/uidindonesia" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/uidindonesia" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.youtube.com/@uidindonesia" target="_blank"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom text-center py-3">
        © 2024 United In Diversity. All Rights Reserved
    </div>
</footer>

