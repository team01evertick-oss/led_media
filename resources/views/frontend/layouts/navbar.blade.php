{{-- =========================================================
BOOTSTRAP + FONT AWESOME
========================================================= --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

{{-- =========================================================
HEADER
========================================================= --}}
<header class="site-header">

    {{-- TOP BAR --}}
    <div class="top-bar">
        <div class="container">
            <div class="topbar-wrapper">

                {{-- LEFT --}}
                <div class="left-info">

                    <a href="mailto:Khemarin.ctn@gmail.com">
                        <i class="fa-solid fa-envelope"></i>
                        Khemarin.ctn@gmail.com
                    </a>

                    <a href="tel:089911988">
                        <i class="fa-solid fa-phone"></i>
                        089 911 988
                    </a>

                    <a href="tel:081688880">
                        <i class="fa-solid fa-phone"></i>
                        081 688 880
                    </a>

                </div>

                {{-- SOCIAL --}}
                <div class="social-icons">

                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>

                </div>

            </div>
        </div>
    </div>

    {{-- NAVBAR --}}
    <div class="main-navbar">

        <nav class="navbar navbar-expand-xl navbar-dark navbar-custom">

            <div class="container-fluid">

                {{-- MOBILE BUTTON --}}
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mainMenu">

                    <span class="navbar-toggler-icon"></span>

                </button>

                {{-- MENU --}}
             <nav class="custom-navbar">

    <div class="nav-wrapper">

        <ul class="navbar-nav" id="mainNav">

            {{-- HOME --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active-link' : '' }}"
                   href="{{ route('home') }}">
                    Home
                </a>
            </li>

            {{-- SOLUTIONS --}}
            <li class="nav-item dropdown-custom">

                <a href="javascript:void(0)"
                   class="nav-link dropdown-toggle-custom {{ request()->routeIs('solutions.*') ? 'active-link' : '' }}">
                    Solutions
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu-custom">
                    <a href="{{ route('solutions.outdoor-billboards') }}">Outdoor LED Billboards</a>
                    <a href="{{ route('solutions.indoor-commercial') }}">Indoor Commercial LED Displays</a>
                    <a href="{{ route('solutions.fine-pixel') }}">Fine Pixel</a>
                    <a href="{{ route('solutions.meeting-room') }}">Meeting Room Displays</a>
                    <a href="{{ route('solutions.retail') }}">Retail & Showroom LED Solutions</a>
                    <a href="{{ route('solutions.control-systems') }}">Control Systems & Integration</a>
                    <a href="{{ route('solutions.installation') }}">Installation & Structural Works</a>
                </div>

            </li>

            {{-- PROJECTS --}}
            <li class="nav-item dropdown-custom">

                <a href="javascript:void(0)"
                   class="nav-link dropdown-toggle-custom {{ request()->routeIs('projects.*') ? 'active-link' : '' }}">
                    Projects
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu-custom">
                    <a href="{{ route('projects.index') }}">All Projects</a>
                    <a href="{{ route('projects.outdoor-billboard') }}">Outdoor Billboard Projects</a>
                    <a href="{{ route('projects.commercial') }}">Commercial Installation Projects</a>
                    <a href="{{ route('projects.retail') }}">Retail / Showroom Projects</a>
                    <a href="{{ route('projects.corporate') }}">Corporate Display Projects</a>
                    <a href="{{ route('projects.fine-pixel') }}">Fine Pixel Projects</a>
                </div>

            </li>

            {{-- INDUSTRIES --}}
            <li class="nav-item dropdown-custom">

                <a href="javascript:void(0)"
                   class="nav-link dropdown-toggle-custom {{ request()->routeIs('industries.*') ? 'active-link' : '' }}">
                    Industries
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu-custom">
                    <a href="{{ route('industries.outdoorAd') }}">Outdoor Advertising Industry</a>
                    <a href="{{ route('industries.retail') }}">Retail & Showroom Industry</a>
                    <a href="{{ route('industries.corporate') }}">Corporate Offices Industry</a>
                    <a href="{{ route('industries.developers') }}">Developers Industry</a>
                    <a href="{{ route('industries.automotive') }}">Automotive Industry</a>
                    <a href="{{ route('industries.hospitality') }}">Hospitality Industry</a>
                    <a href="{{ route('industries.banks') }}">Banks Industry</a>
                    <a href="{{ route('industries.government') }}">Government & Public Sector</a>
                </div>

            </li>

            {{-- SERVICES --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('services.index') ? 'active-link' : '' }}"
                   href="{{ route('services.index') }}">
                    Service & Maintenance
                </a>
            </li>

            {{-- WHY LED --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('why-led-media') ? 'active-link' : '' }}"
                   href="{{ route('why-led-media') }}">
                    Why LED Media
                </a>
            </li>

            {{-- INSIGHTS --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('insights') ? 'active-link' : '' }}"
                   href="{{ route('insights') }}">
                    Insights
                </a>
            </li>

            {{-- CONTACT --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact') ? 'active-link' : '' }}"
                   href="{{ route('contact') }}">
                    Contact
                </a>
            </li>

        </ul>

    </div>

</nav>

            </div>

        </nav>

    </div>

</header>

{{-- =========================================================
CSS
========================================================= --}}

<style>

/* =========================================================
RESET
========================================================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

/* =========================================================
BODY
========================================================= */

body{
    background:#020817;
    min-height:200vh;
    font-family:Arial,sans-serif;
}

/* =========================================================
HEADER
========================================================= */

.site-header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:9999;
}

/* =========================================================
TOP BAR
========================================================= */

.top-bar{
    background:rgba(5,10,25,0.95);
    padding:10px 0;
}

.topbar-wrapper{
    display:flex;
    align-items:center;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:15px;
}

/* LEFT INFO */

.left-info{
    display:flex;
    align-items:center;
    gap:18px;
    flex-wrap:wrap;
}

.left-info a{
    color:rgba(255,255,255,0.85);
    text-decoration:none;
    font-size:13px;
}

.left-info a i{
    margin-right:6px;
    color:#3b82f6;
}

/* SOCIAL */

.social-icons{
    display:flex;
    align-items:center;
    gap:10px;
}

.social-icons a{
    width:34px;
    height:34px;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.08);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#ffffff;
    text-decoration:none;
    transition:.3s ease;
}

.social-icons a:hover{
    background:#0d6efd;
    transform:translateY(-2px);
}
/* =========================
   NAVBAR
========================= */

.custom-navbar{
    width: 100%;
    padding: 12px 0;
    display: flex;
    justify-content: center;
    position: relative;
    z-index: 999;
}

/* MAIN CONTAINER */
.nav-wrapper{
    width: 95%;
    max-width: 1250px;
    background: rgba(8, 24, 74, 0.95);
    border: 1px solid rgba(93, 141, 255, 0.45);
    border-radius: 60px;
    padding: 6px 12px;
    position: relative;
    overflow: visible;
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.04),
        0 10px 40px rgba(0,0,0,0.35),
        inset 0 0 20px rgba(255,255,255,0.02);
}

/* NAV UL */
.navbar-nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
}

/* NAV ITEM */
.nav-item{
    position: relative;
}

/* NAV LINK */
.nav-link,
.dropdown-toggle-custom{
    height: 42px;
    padding: 0 18px;
    display: flex;
    align-items: center;
    gap: 8px;

    color: #dbe7ff;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;

    border-radius: 30px;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}

/* HOVER */
.nav-link:hover,
.dropdown-toggle-custom:hover{
    color: #ffffff;
    background: rgba(255,255,255,0.05);
}

/* ACTIVE PILL */
.active-link{
    background: linear-gradient(
        135deg,
        #4a63ff 0%,
        #192b9b 100%
    );

    color: #fff !important;

    box-shadow:
        inset 0 1px 1px rgba(255,255,255,0.2),
        0 6px 20px rgba(64,110,255,0.35);
}

/* ICON */
.dropdown-toggle-custom i{
    font-size: 11px;
    transition: transform 0.3s ease;
}

/* ROTATE ICON */
.dropdown-custom:hover i{
    transform: rotate(180deg);
}

/* =========================
   DROPDOWN
========================= */

.dropdown-custom{
    position: relative;
}

/* DROPDOWN BOX */
.dropdown-menu-custom{
    min-width: 280px;

    position: absolute;
    top: 115%;
    left: 0;

    background: rgba(10, 18, 56, 0.98);

    border: 1px solid rgba(93,141,255,0.25);
    border-radius: 18px;

    padding: 10px;

    display: flex;
    flex-direction: column;
    gap: 4px;

    opacity: 0;
    visibility: hidden;
    transform: translateY(12px);

    transition: all 0.3s ease;

    box-shadow:
        0 20px 40px rgba(0,0,0,0.4);

    z-index: 100;
}

/* SHOW DROPDOWN */
.dropdown-custom:hover .dropdown-menu-custom{
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* DROPDOWN LINK */
.dropdown-menu-custom a{
    padding: 12px 14px;

    color: #dbe7ff;
    text-decoration: none;
    font-size: 14px;

    border-radius: 12px;

    transition: all 0.25s ease;
}

/* DROPDOWN HOVER */
.dropdown-menu-custom a:hover{
    background: rgba(70, 100, 255, 0.15);
    color: #ffffff;
    padding-left: 18px;
}

/* =========================
   GLOW EFFECT
========================= */

.nav-wrapper::before{
    content: '';

    position: absolute;
    inset: 0;

    border-radius: 60px;

    padding: 1px;

    background:
        linear-gradient(
            90deg,
            rgba(255,255,255,0.08),
            rgba(91,124,255,0.35),
            rgba(255,255,255,0.08)
        );

    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);

    -webkit-mask-composite: xor;
            mask-composite: exclude;

    pointer-events: none;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width: 1200px){

    .navbar-nav{
        gap: 2px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .nav-link,
    .dropdown-toggle-custom{
        font-size: 13px;
        padding: 0 14px;
    }

}

@media(max-width: 768px){

    .nav-wrapper{
        border-radius: 24px;
        padding: 14px;
    }

    .navbar-nav{
        flex-direction: column;
        align-items: stretch;
    }

    .nav-link,
    .dropdown-toggle-custom{
        width: 100%;
        justify-content: space-between;
    }

    .dropdown-menu-custom{
        position: relative;
        top: 0;
        margin-top: 10px;
        width: 100%;
    }

}
@media(max-width:1199px){

    .navbar-custom{
        border-radius:24px;
        padding:18px;
    }

    .navbar-collapse{
        margin-top:18px;
    }

    .nav-pill-bg{
        display:none;
    }

    .navbar-nav{
        flex-direction:column;
        align-items:stretch;
        padding:0;
    }

    .navbar-custom .nav-link,
    .dropdown-toggle-custom{
        width:100%;
        border-radius:12px !important;
        padding:14px 16px !important;

        display:flex !important;
        align-items:center;
        justify-content:space-between;
    }

    /* MOBILE DROPDOWN */

    .dropdown-menu-custom,
    .dropdown-menu-custom-ind{

        position:relative;
        top:auto;
        left:auto;

        width:100%;
        min-width:100%;

        margin-top:6px;

        display:none;

        opacity:1 !important;
        visibility:visible !important;
        transform:none !important;

        box-shadow:none;

        border:1px solid rgba(255,255,255,0.06);
    }

    .dropdown-custom.active .dropdown-menu-custom,
    .dropdown-custom.active .dropdown-menu-custom-ind{
        display:block;
    }
}

/* =========================================================
MOBILE
========================================================= */

@media(max-width:768px){

    .topbar-wrapper{
        flex-direction:column;
        text-align:center;
    }

    .left-info{
        justify-content:center;
        gap:10px;
    }

    .social-icons{
        justify-content:center;
    }

    .navbar-custom{
        width:94%;
    }
}

</style>

{{-- =========================================================
BOOTSTRAP JS
========================================================= --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- =========================================================
CUSTOM JS
========================================================= --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {

    const nav = document.getElementById("mainNav");
    const pill = document.querySelector(".nav-pill-bg");

    const navLinks = document.querySelectorAll(
        "#mainNav .nav-link, #mainNav .dropdown-toggle-custom"
    );

    const dropdowns = document.querySelectorAll(".dropdown-custom");

    /* =====================================================
       CHECK DESKTOP
    ===================================================== */

    function isDesktop() {
        return window.innerWidth > 1199;
    }

    /* =====================================================
       MOVE PILL
    ===================================================== */

    function movePillTo(element) {

        if (!pill || !isDesktop()) return;

        const navRect = nav.getBoundingClientRect();
        const rect = element.getBoundingClientRect();

        pill.style.width = rect.width + "px";
        pill.style.height = rect.height + "px";

        pill.style.left =
            (rect.left - navRect.left) + "px";

        pill.style.top =
            (rect.top - navRect.top) + "px";

        pill.style.opacity = "1";
    }

    /* =====================================================
       SET DEFAULT ACTIVE
    ===================================================== */

    const activeLink = document.querySelector(".active-link");

    if (activeLink && isDesktop()) {
        movePillTo(activeLink);
    }

    /* =====================================================
       HOVER EFFECT
    ===================================================== */

    navLinks.forEach(link => {

        link.addEventListener("mouseenter", () => {

            if (isDesktop()) {
                movePillTo(link);
            }

        });

    });

    /* =====================================================
       RESET TO ACTIVE
    ===================================================== */

    nav.addEventListener("mouseleave", () => {

        if (activeLink && isDesktop()) {
            movePillTo(activeLink);
        } else {
            pill.style.opacity = "0";
        }

    });

    /* =====================================================
       DESKTOP DROPDOWN
    ===================================================== */

    dropdowns.forEach(dropdown => {

        dropdown.addEventListener("mouseenter", () => {

            if (isDesktop()) {
                dropdown.classList.add("show-dropdown");
            }

        });

        dropdown.addEventListener("mouseleave", () => {

            if (isDesktop()) {
                dropdown.classList.remove("show-dropdown");
            }

        });

    });

    /* =====================================================
       MOBILE DROPDOWN
    ===================================================== */

    const toggles = document.querySelectorAll(
        ".dropdown-toggle-custom"
    );

    toggles.forEach(toggle => {

        toggle.addEventListener("click", function(e) {

            if (!isDesktop()) {

                e.preventDefault();

                const parent =
                    this.closest(".dropdown-custom");

                dropdowns.forEach(item => {

                    if (item !== parent) {
                        item.classList.remove("active");
                    }

                });

                parent.classList.toggle("active");

            }

        });

    });

    /* =====================================================
       WINDOW RESIZE
    ===================================================== */

    window.addEventListener("resize", () => {

        if (isDesktop()) {

            dropdowns.forEach(dropdown => {
                dropdown.classList.remove("active");
            });

            if (activeLink) {
                movePillTo(activeLink);
            }

        } else {

            pill.style.opacity = "0";

        }

    });

});
</script>