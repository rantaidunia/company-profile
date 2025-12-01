<style>
/* --- Top Bar--- */
.top-bar {
  background-color: #264a5e;
  color: white;
  font-size: 15px;
  padding: 10px 0; /* Reduced padding for mobile */
  position: relative; /* Changed from sticky to relative for better mobile flow, or keep sticky if desired */
  z-index: 950;
}

.top-bar .container {
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center !important;
}

@media (min-width: 992px) {
    .top-bar .container {
        justify-content: space-between !important;
        flex-wrap: nowrap;
    }
    .top-bar {
        padding: 25px 0;
        position: sticky;
        top: 0;
    }
}

.top-bar a {
  color: white;
  text-decoration: none;
  font-size: 15px;
}

.top-bar a:hover { color: #cce6f4; }

.top-bar .social-icons a {
  color: white;
  font-size: 18px;
  margin-left: 15px;
}

/* --- Header --- */
.header {
  background: white;
  height: 82px;
  display: flex;
  align-items: center;
  position: sticky;
  top: 0; /* Adjusted top since top-bar might scroll or be smaller */
  z-index: 950;
  transition: all 0.3s;
}

@media (min-width: 992px) {
    .header {
        top: 65px; /* Match top-bar height on desktop */
    }
}

.header .container-xl {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.header-logo {
  max-height: 50px; /* Smaller on mobile */
  margin-left: 0;
}

@media (min-width: 992px) {
    .header-logo {
        max-height: 63px;
        margin-left: -35px;
    }
}

/* Navigation */
.navmenu {
  margin-left: 0;
}

@media (min-width: 992px) {
    .navmenu {
        margin-left: -10px;
    }
}

.navmenu ul {
  list-style: none;
  padding-left: 0;
  margin: 0;
  display: flex;
  align-items: center;
  gap: 5px;
}

.navmenu ul li {
  position: relative;
}

.navmenu ul li a {
  color: #5a5a5a;
  font-weight: 500;
  font-size: 16px;
  text-decoration: none;
  transition: color 0.2s ease;
  display: flex;
  align-items: center;
  gap: 6px;
}

/* Home icon */
.navmenu ul li a i.bi-house-door-fill {
  font-size: 16px;
  line-height: 1;
  position: relative;
  top: -1px;
}

.navmenu ul li a:hover,
.navmenu ul li a.active {
  color: #005b7f;
}

/* Dropdown arrow */
.navmenu ul li.dropdown > a::after {
  content: "❯";
  transform: rotate(90deg);
  display: inline-block;
  font-size: 13px;
  margin-left: 4px;
  color: #6c6c6c;
  -webkit-text-stroke: 0.8px #6c6c6c;
}

/*MAIN DROPDOWN MENU*/
.navmenu ul li .dropdown-menu {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  position: absolute;
  top: 38px;
  left: 0;
  background: white;
  min-width: 260px;
  padding: 12px 0;
  border-radius: 10px;
  box-shadow: 0px 4px 18px rgba(0,0,0,0.12);
  z-index: 2000;

  transform: translateY(15px);
  transition: opacity .28s ease, transform .28s ease;
}

.navmenu ul li.dropdown:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  transform: translateY(0);
}

.navmenu ul li .dropdown-menu a {
  display: block;
  padding: 12px 20px;
  color: #333;
  font-size: 16px;
}

.navmenu ul li .dropdown-menu a:hover {
  background: #f5f5f5;
  color: #005b7f;
}

/*RIGHT-SIDE SUBMENU*/
.dropdown-sub {
  position: relative;
}

.dropdown-sub > a::after {
  font-size: 12px;
  margin-left: 6px;
  transform: rotate(0deg);
  color: #777;
}

/* Submenu*/
.dropdown-menu-sub {
  position: absolute;
  top: 0 !important;            
  left: 100% !important;        
  margin-left: 4px;
  min-width: 240px;

  background: white;
  border-radius: 10px;
  padding: 12px 0;

  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transform: translateX(10px);

  box-shadow: 0px 4px 18px rgba(0,0,0,0.12);
  transition: opacity .25s ease, transform .25s ease;
  z-index: 3000;
}

.dropdown-sub:hover .dropdown-menu-sub {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  transform: translateX(0);
}

.dropdown-menu-sub a {
  display: block;
  padding: 12px 20px;
  color: #333;
  white-space: nowrap;
}

.dropdown-menu-sub a:hover {
  background: #f5f5f5;
  color: #005b7f;
}

/* Divider + Funding */
.divider-line {
  width: 1px;
  height: 30px;
  background-color: #ccc;
  margin: 0 15px; /* Reduced margin */
}

@media (min-width: 992px) {
    .divider-line {
        margin: 0 25px 0 40px;
    }
}

.header-right {
  margin-right: 0;
  display: flex;
  align-items: center;
}

@media (min-width: 992px) {
    .header-right {
        margin-right: -10px;
    }
}

.btn-funding {
  background-color: #e6a846;
  color: black;
  border-radius: 50px;
  padding: 6px 20px; /* Smaller on mobile */
  font-weight: 600;
  text-decoration: none;
  transition: 0.2s ease;
  font-size: 14px;
}

@media (min-width: 992px) {
    .btn-funding {
        padding: 8px 28px;
        font-size: 16px;
    }
}

.btn-funding:hover {
  background-color: #d59834;
  color: white;
}

/* Mobile Nav Toggle */
.mobile-nav-toggle {
  display: none;
  font-size: 28px;
  color: #333;
  cursor: pointer;
  margin-left: 15px;
  border: none;
  background: none;
}

/* Mobile Navigation Styles */
/* Mobile Navigation Drawer */
@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  /* Hide default navmenu on mobile */
  .navmenu {
    display: none;
  }

  /* Drawer Container */
  .mobile-menu-drawer {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background: #fff;
    z-index: 99999;
    transition: right 0.3s ease;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    overflow-y: auto;
  }

  .mobile-menu-drawer.active {
    right: 0;
  }

  /* Drawer Header */
  .drawer-header {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    position: relative;
  }

  .drawer-close-btn {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    background: transparent;
    border: none;
    color: #333;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    padding: 0;
  }

  .drawer-close-btn:hover {
    color: #005b7f;
  }

  .drawer-logo {
    max-height: 40px;
  }

  /* Drawer Links */
  .drawer-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
  }

  .drawer-links li {
    border-bottom: 1px solid #eee;
  }

  .drawer-links li a {
    display: block;
    padding: 15px 20px;
    color: #555;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.2s;
  }

  .drawer-links li a:hover {
    color: #005b7f;
    background: #f9f9f9;
  }
  
  /* Submenu styling in drawer */
  .drawer-links .dropdown-toggle-btn {
      display: flex;
      justify-content: space-between;
      align-items: center;
  }
  
  .drawer-submenu {
      display: block; /* Always visible */
      background: #f9f9f9;
      padding-left: 0;
      list-style: none;
  }
  
  .drawer-submenu li a {
      padding-left: 40px;
      font-size: 15px;
      border-bottom: 1px solid #f0f0f0;
  }
  
  /* Nested submenu (third level) */
  .drawer-submenu .drawer-submenu {
      background: #f0f0f0;
  }
  
  .drawer-submenu .drawer-submenu li a {
      padding-left: 60px;
      font-size: 14px;
  }

  /* Overlay */
  .mobile-menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 99998;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
  }

  .mobile-menu-overlay.active {
    opacity: 1;
    visibility: visible;
  }
}

/* Ensure mobile drawer is hidden on desktop */
@media (min-width: 992px) {
  .mobile-menu-drawer,
  .mobile-menu-overlay {
    display: none !important;
  }
}
</style>


<!-- TOP BAR -->
<div class="top-bar">
  <div class="container d-flex align-items-center">
    <div class="contact-info d-flex align-items-center flex-wrap justify-content-center">
      <i class="bi bi-telephone me-2"></i>
      <a>+62213521928</a>
      <span class="mx-3 d-none d-md-inline">|</span>
      <div class="w-100 d-md-none"></div> <!-- Force break on mobile -->
      <i class="bi bi-envelope me-2"></i>
      <a>contact@unitedindiversity.org</a>
    </div>
    <div class="social-icons d-flex align-items-center mt-2 mt-lg-0">
      <a href="https://www.linkedin.com/company/uidindonesia/" target="_blank"><i class="bi bi-linkedin"></i></a>
      <a href="https://www.instagram.com/uidindonesia/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://x.com/uidindonesia" target="_blank"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.facebook.com/uidindonesia" target="_blank"><i class="bi bi-facebook"></i></a>
      <a href="https://www.youtube.com/@uidindonesia" target="_blank"><i class="bi bi-youtube"></i></a>
    </div>
  </div>
</div>


<!-- HEADER -->
<header id="header" class="header">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="https://www.unitedindiversity.org/" class="d-flex align-items-center">
      <img src="{{ asset('assets/UID.png') }}" class="header-logo">
    </a>

    <!-- Desktop Nav -->
    <nav id="navmenu" class="navmenu d-none d-lg-block">
      <ul class="mb-0">
        <li><a href="https://www.unitedindiversity.org/"><i class="bi bi-house-door-fill"></i></a></li>
        <li><a href="https://www.unitedindiversity.org/about-us">About UID</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle-btn">UID Campuses</a>
          <ul class="dropdown-menu">
            <li><a href="https://www.unitedindiversity.org/page/uid-learning-hub-jakarta">UID Learning Hub Jakarta</a></li>
            <li class="dropdown-sub">
              <a href="#" class="dropdown-toggle-btn">UID Bali Campus</a>
              <ul class="dropdown-menu-sub">
                <li><a href="https://unitedindiversity.org/UID-bali-campus">About Bali Campus</a></li>
                <li><a href="https://unitedindiversity.org/page/tsinghua-southeast-asia-center-tsinghua-sea">Tsinghua Southeast Asia</a></li>
                <li><a href="https://unitedindiversity.org/page/sdsn-south-east-asia">SDSN SEA</a></li>
                <li><a href="https://rmi.org/">RMI</a></li>
                <li><a href="https://unitedindiversity.org/page/knowledge-innovation-technology-alliance">KITA</a></li>
                <li><a href="https://www.surya.ac.id/scle/news.detail.php?id=1&title=Matematika.Gasing">GASING</a></li>
                <li><a href="https://gisaid.org/">GISAID Academy</a></li>
                <li><a href="https://tieindonesia.org/">TIE</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle-btn">Programs</a>
          <ul class="dropdown-menu">
            <li><a href="https://unitedindiversity.org/programs/ideas-asia-pacific">IDEAS ASIA PACIFIC</a></li>
            <li><a href="https://unitedindiversity.org/programs/ideas-indonesia-1">IDEAS INDONESIA</a></li>
            <li><a href="https://unitedindiversity.org/programs/bekal-pemimpin">BEKAL Pemimpin</a></li>
            <li><a href="https://unitedindiversity.org/programs/lentera-indonesia">LENTERA Indonesia</a></li>
            <li><a href="https://unitedindiversity.org/programs/leans">LEANS</a></li>
            <li><a href="https://unitedindiversity.org/programs/youth-action-forum">YAF</a></li>
            <li><a href="https://unitedindiversity.org/programs/higher-education-transformation-program-1">HE Transformation</a></li>
            <li><a href="https://unitedindiversity.org/programs">Other Programs</a></li>
          </ul>
        </li>
        <li><a href="https://event.unitedindiversity.org/">Events</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle-btn">Updates</a>
          <ul class="dropdown-menu">
            <li><a href="https://unitedindiversity.org/news">News</a></li>
            <li><a href="https://unitedindiversity.org/videos">Videos</a></li>
            <li><a href="https://unitedindiversity.org/photos-documentation">Photos Documentation</a></li>
            <li><a href="https://unitedindiversity.org/UID-impact-report">UID Impact report</a></li>
          </ul>
        </li>
        <li><a href="https://fellows.unitedindiversity.org/">UID Fellows</a></li>
        <li><a href="https://unitedindiversity.org/collaborate-with-UID">Collaborate With UID</a></li>
      </ul>
    </nav>

    <div class="d-flex align-items-center header-right">
      <div class="divider-line"></div>
      <a href="{{ url('/funding') }}" class="btn-funding">Funding</a>
      <button class="mobile-nav-toggle d-lg-none"><i class="bi bi-list"></i></button>
    </div>

  </div>
</header>

<!-- Mobile Menu Drawer (Separate Structure) -->
<div class="mobile-menu-overlay"></div>
<div class="mobile-menu-drawer">
    <div class="drawer-header">
        <button class="drawer-close-btn"><i class="bi bi-list"></i></button>
        <img src="{{ asset('assets/UID.png') }}" class="drawer-logo">
    </div>
    <ul class="drawer-links">
        <li><a href="https://www.unitedindiversity.org/">About UID</a></li>
        <li>
            <a href="#" class="dropdown-toggle-btn">UID Campuses</a>
            <ul class="drawer-submenu">
                <li><a href="https://www.unitedindiversity.org/page/uid-learning-hub-jakarta">UID Learning Hub Jakarta</a></li>
                <li>
                    <a href="https://unitedindiversity.org/UID-bali-campus">UID Bali Campus</a>
                    <ul class="drawer-submenu">
                        <li><a href="https://unitedindiversity.org/UID-bali-campus">About UID Bali Campus</a></li>
                        <li><a href="https://unitedindiversity.org/page/tsinghua-southeast-asia-center-tsinghua-sea">Tsinghua Southeast Asia</a></li>
                        <li><a href="https://unitedindiversity.org/page/sdsn-south-east-asia">SDSN Southeast Asia</a></li>
                        <li><a href="https://rmi.org/">Rocky Mountain Institute (RMI)</a></li>
                        <li><a href="https://unitedindiversity.org/page/knowledge-innovation-technology-alliance">KITA</a></li>
                        <li><a href="https://www.surya.ac.id/scle/news.detail.php?id=1&title=Matematika.Gasing">GASING</a></li>
                        <li><a href="https://gisaid.org/">GISAID Academy</a></li>
                        <li><a href="https://tieindonesia.org/">TIE</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle-btn">Programs</a>
            <ul class="drawer-submenu">
                <li><a href="https://unitedindiversity.org/programs/ideas-asia-pacific">IDEAS ASIA PACIFIC</a></li>
                <li><a href="https://unitedindiversity.org/programs/ideas-indonesia-1">IDEAS INDONESIA</a></li>
                <li><a href="https://unitedindiversity.org/programs/bekal-pemimpin">BEKAL Pemimpin</a></li>
                <li><a href="https://unitedindiversity.org/programs/lentera-indonesia">LENTERA Indonesia</a></li>
                <li><a href="https://unitedindiversity.org/programs/leans">LEANS</a></li>
                <li><a href="https://unitedindiversity.org/programs/youth-action-forum">YAF</a></li>
                <li><a href="https://unitedindiversity.org/programs/higher-education-transformation-program-1">HE Transformation</a></li>
            </ul>
        </li>
        <li><a href="https://event.unitedindiversity.org/">Events</a></li>
        <li>
            <a href="#" class="dropdown-toggle-btn">Updates</a>
            <ul class="drawer-submenu">
                <li><a href="https://unitedindiversity.org/news">News</a></li>
                <li><a href="https://unitedindiversity.org/videos">Videos</a></li>
                <li><a href="https://unitedindiversity.org/photos-documentation">Photos Documentation</a></li>
                <li><a href="https://unitedindiversity.org/UID-impact-report">UID Impact report</a></li>
            </ul>
        </li>
        <li><a href="https://fellows.unitedindiversity.org/">UID Fellows</a></li>
        <li><a href="https://unitedindiversity.org/collaborate-with-UID">Collaborate With UID</a></li>
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
  const drawerCloseBtn = document.querySelector('.drawer-close-btn');
  const drawer = document.querySelector('.mobile-menu-drawer');
  const overlay = document.querySelector('.mobile-menu-overlay');

  function openMenu() {
    drawer.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('mobile-nav-active');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    drawer.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('mobile-nav-active');
    document.body.style.overflow = '';
  }

  if (mobileNavToggle) {
    mobileNavToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      if (drawer.classList.contains('active')) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  if (drawerCloseBtn) {
    drawerCloseBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      closeMenu();
    });
  }

  if (overlay) {
    overlay.addEventListener('click', function() {
      closeMenu();
    });
  }
  
  // Close menu on resize to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 992 && drawer.classList.contains('active')) {
      closeMenu();
    }
  });
});
</script>
