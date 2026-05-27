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
                <div class="left-info">
                    <a href="mailto:Khemarin.ctn@gmail.com"><i class="fa-solid fa-envelope"></i> Khemarin.ctn@gmail.com</a>
                    <a href="tel:089911988"><i class="fa-solid fa-phone"></i> 089 911 988</a>
                    <a href="tel:081688880"><i class="fa-solid fa-phone"></i> 081 688 880</a>
                </div>
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
        <div class="navbar-inner">

            {{-- PILL --}}
            <div class="nav-pill">

                {{-- Mobile top row: logo + hamburger --}}
                <div class="mobile-toprow">
                    <span class="nav-brand">LED MEDIA</span>
                    <button class="hamburger-btn" id="hamburgerBtn" aria-label="Menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

                {{-- Nav links --}}
                <ul class="nav-links" id="navLinks">

                    <li><a href="{{ route('home') }}"
                           class="nav-link-item {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a></li>

                    <li class="has-dropdown" data-panel="panel-solutions">
                        <a href="javascript:void(0)"
                           class="nav-link-item {{ request()->routeIs('solutions.*') ? 'is-active' : '' }}">
                            Solutions <i class="fa-solid fa-chevron-down chev"></i>
                        </a>
                        <ul class="mobile-sub">
                            <li><a href="{{ route('solutions.outdoor-billboards') }}" class="{{ request()->routeIs('solutions.outdoor-billboards') ? 'is-active' : '' }}">Outdoor LED Billboards</a></li>
                            <li><a href="{{ route('solutions.indoor-commercial') }}" class="{{ request()->routeIs('solutions.indoor-commercial') ? 'is-active' : '' }}">Indoor Commercial LED Displays</a></li>
                            <li><a href="{{ route('solutions.fine-pixel') }}" class="{{ request()->routeIs('solutions.fine-pixel') ? 'is-active' : '' }}">Fine Pixel / Meeting Room Displays</a></li>
                            <li><a href="{{ route('solutions.meeting-room') }}" class="{{ request()->routeIs('solutions.meeting-room') ? 'is-active' : '' }}">Meeting Room Displays</a></li>
                            <li><a href="{{ route('solutions.retail') }}" class="{{ request()->routeIs('solutions.retail') ? 'is-active' : '' }}">Retail & Showroom LED Solutions</a></li>
                            <li><a href="{{ route('solutions.control-systems') }}" class="{{ request()->routeIs('solutions.control-systems') ? 'is-active' : '' }}">Control Systems & Integration</a></li>
                            <li><a href="{{ route('solutions.installation') }}" class="{{ request()->routeIs('solutions.installation') ? 'is-active' : '' }}">Installation & Structural Works</a></li>
                        </ul>
                    </li>

                

                    <li class="has-dropdown" data-panel="panel-industries">
                        <a href="javascript:void(0)"
                           class="nav-link-item {{ request()->routeIs('industries.*') ? 'is-active' : '' }}">
                            Industries <i class="fa-solid fa-chevron-down chev"></i>
                        </a>
                        <ul class="mobile-sub">
                            <li><a href="{{ route('industries.outdoorAd') }}" class="{{ request()->routeIs('industries.outdoorAd') ? 'is-active' : '' }}">Outdoor Advertising Industry</a></li>
                            <li><a href="{{ route('industries.retail') }}" class="{{ request()->routeIs('industries.retail') ? 'is-active' : '' }}">Retail & Showroom Industry</a></li>
                            <li><a href="{{ route('industries.corporate') }}" class="{{ request()->routeIs('industries.corporate') ? 'is-active' : '' }}">Corporate Offices Industry</a></li>
                            <li><a href="{{ route('industries.developers') }}" class="{{ request()->routeIs('industries.developers') ? 'is-active' : '' }}">Developers Industry</a></li>
                            <li><a href="{{ route('industries.automotive') }}" class="{{ request()->routeIs('industries.automotive') ? 'is-active' : '' }}">Automotive Industry</a></li>
                            <li><a href="{{ route('industries.hospitality') }}" class="{{ request()->routeIs('industries.hospitality') ? 'is-active' : '' }}">Hospitality Industry</a></li>
                            <li><a href="{{ route('industries.banks') }}" class="{{ request()->routeIs('industries.banks') ? 'is-active' : '' }}">Banks Industry</a></li>
                            <li><a href="{{ route('industries.government') }}" class="{{ request()->routeIs('industries.government') ? 'is-active' : '' }}">Government & Public Sector</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ route('projects.index') }}"
                           class="nav-link-item {{ request()->routeIs('projects.*') ? 'is-active' : '' }}">Projects</a></li>

                    <li><a href="{{ route('services.index') }}"
                           class="nav-link-item {{ request()->routeIs('services.index') ? 'is-active' : '' }}">Service & Maintenance</a></li>

                    <li><a href="{{ route('why-led-media') }}"
                           class="nav-link-item {{ request()->routeIs('why-led-media') ? 'is-active' : '' }}">Why LED Media</a></li>

                    <li><a href="{{ route('insights') }}"
                           class="nav-link-item {{ request()->routeIs('insights') ? 'is-active' : '' }}">Insights</a></li>

                    <li><a href="{{ route('contact') }}"
                           class="nav-link-item {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a></li>

                </ul>
            </div>{{-- /.nav-pill --}}

            {{-- DESKTOP DROPDOWN PANELS --}}
            <div class="dd-panel" id="panel-solutions">
                <a href="{{ route('solutions.outdoor-billboards') }}" class="{{ request()->routeIs('solutions.outdoor-billboards') ? 'is-active' : '' }}">Outdoor LED Billboards</a>
                <a href="{{ route('solutions.indoor-commercial') }}" class="{{ request()->routeIs('solutions.indoor-commercial') ? 'is-active' : '' }}">Indoor Commercial LED Displays</a>
                <a href="{{ route('solutions.fine-pixel') }}" class="{{ request()->routeIs('solutions.fine-pixel') ? 'is-active' : '' }}">Fine Pixel</a>
            <a href="{{ route('solutions.retail') }}" class="{{ request()->routeIs('solutions.retail') ? 'is-active' : '' }}">Retail & Showroom LED Solutions</a>
                <a href="{{ route('solutions.control-systems') }}" class="{{ request()->routeIs('solutions.control-systems') ? 'is-active' : '' }}">Control Systems & Integration</a>
                <a href="{{ route('solutions.installation') }}" class="{{ request()->routeIs('solutions.installation') ? 'is-active' : '' }}">Installation & Structural Works</a>
            </div>

            <div class="dd-panel" id="panel-industries">
                <a href="{{ route('industries.outdoorAd') }}" class="{{ request()->routeIs('industries.outdoorAd') ? 'is-active' : '' }}">Outdoor Advertising Industry</a>
                <a href="{{ route('industries.retail') }}" class="{{ request()->routeIs('industries.retail') ? 'is-active' : '' }}">Retail & Showroom Industry</a>
                <a href="{{ route('industries.corporate') }}" class="{{ request()->routeIs('industries.corporate') ? 'is-active' : '' }}">Corporate Offices Industry</a>
                <a href="{{ route('industries.developers') }}" class="{{ request()->routeIs('industries.developers') ? 'is-active' : '' }}">Developers Industry</a>
                <a href="{{ route('industries.automotive') }}" class="{{ request()->routeIs('industries.automotive') ? 'is-active' : '' }}">Automotive Industry</a>
                <a href="{{ route('industries.hospitality') }}" class="{{ request()->routeIs('industries.hospitality') ? 'is-active' : '' }}">Hospitality Industry</a>
                <a href="{{ route('industries.banks') }}" class="{{ request()->routeIs('industries.banks') ? 'is-active' : '' }}">Banks Industry</a>
                <a href="{{ route('industries.government') }}" class="{{ request()->routeIs('industries.government') ? 'is-active' : '' }}">Government & Public Sector</a>
            </div>

        </div>{{-- /.navbar-inner --}}
    </div>

</header>

{{-- =========================================================
CSS
========================================================= --}}
<style>

* { margin: 0; padding: 0; box-sizing: border-box; }

/* ── Fixed header ── */
.site-header {
    position: fixed;
    top: 0; left: 0;
    width: 100%;
    z-index: 9999;
}

/* ══════════════════════
   TOP BAR
══════════════════════ */
.top-bar {
   
    padding: 9px 0;
}
.topbar-wrapper {
    display: flex; align-items: center;
    justify-content: space-between;
    flex-wrap: wrap; gap: 10px;
}
.left-info { display: flex; align-items: center; gap: 18px; flex-wrap: wrap; }
.left-info a {
    color: rgba(255,255,255,0.80); text-decoration: none;
    font-size: 13px; display: flex; align-items: center;
    gap: 6px; transition: color .2s;
}
.left-info a:hover { color: #fff; }
.left-info a i { color: #3b82f6; }

.social-icons { display: flex; align-items: center; gap: 8px; }
.social-icons a {
    width: 32px; height: 32px; border-radius: 50%;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.10);
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 13px; text-decoration: none;
    transition: .25s ease;
}
.social-icons a:hover {
    background: #0d6efd; border-color: #0d6efd;
    transform: translateY(-2px);
}

/* ══════════════════════
   NAVBAR SHELL
══════════════════════ */
.main-navbar {
    width: 100%;
   
    padding: 10px 0;
    display: flex;
    justify-content: center;
}
.navbar-inner {
    width: 90%;
    max-width: 1900px;
    position: relative;
}

/* ── Pill ── */
.nav-pill {
    width: 100%;
    background: rgba(8, 24, 74, 0.97);
    border: 1px solid rgba(93,141,255,0.40);
    border-radius: 60px;
    padding: 5px 16px;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 6px;
    position: relative;
    z-index: 2;
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.03),
        0 8px 32px rgba(0,0,0,0.45),
        inset 0 0 18px rgba(255,255,255,0.02);
}

/* Mobile top row hidden on desktop */
.mobile-toprow {
    display: none;
}

/* Hamburger */
.hamburger-btn {
    background: none; border: none;
    color: #fff; font-size: 20px; cursor: pointer;
    padding: 6px 10px; border-radius: 8px;
    transition: background .2s;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
}
.hamburger-btn:hover { background: rgba(255,255,255,0.08); }

/* Brand */
.nav-brand {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 1px;
    flex: 1;
}

/* ── Nav links list ── */
.nav-links {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    flex: 1;
    list-style: none;
    margin: 0; padding: 0;
    gap: 2px;
}
.nav-links > li { list-style: none; position: relative; }

.nav-link-item {
    height: 40px;
    padding: 0 13px;
    display: flex; align-items: center; gap: 5px;
    color: #dbe7ff;
    font-size: 14px; font-weight: 500;
    text-decoration: none;
    border-radius: 30px;
    white-space: nowrap;
    cursor: pointer;
    transition: color .2s, background .2s;
}
.nav-link-item:hover { color: #fff; background: rgba(255,255,255,0.06); }
.nav-link-item.is-active {
    background: linear-gradient(135deg, #4a63ff 0%, #192b9b 100%);
    color: #fff;
    box-shadow: inset 0 1px 1px rgba(255,255,255,0.18), 0 4px 16px rgba(64,110,255,0.35);
}

.chev { font-size: 10px; transition: transform .3s; }
.has-dropdown.dd-open > a .chev { transform: rotate(180deg); }

/* Mobile sub-menu hidden on desktop */
.mobile-sub { display: none; }

/* ══════════════════════
   DESKTOP DROPDOWN PANELS
══════════════════════ */
.dd-panel {
    position: absolute;
    top: calc(100% + 10px);
    left: 20px;
    width: 95%;
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
    gap: 6px;
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    padding: 10px 2px;
    background: none;
    border: 1px solid rgba(255,255,255,0.13);
    border-radius: 22px;
    z-index: 1;

    opacity: 0;
    visibility: hidden;
    transform: translateY(-8px);
    pointer-events: none;
    transition: opacity .22s ease, transform .22s ease, visibility .22s;
}
.dd-panel.dd-visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    pointer-events: auto;
}
.dd-panel a {
    flex: 0 0 auto;
    padding: 9px 16px;
    color: rgba(255,255,255,0.88);
    text-decoration: none;
    font-size: 13px; font-weight: 500;
    border-radius: 999px;
    white-space: nowrap;
    transition: background .2s, color .2s;
}
.dd-panel a:hover { background: rgba(255,255,255,0.13); color: #fff; }
.dd-panel a.is-active {
    background: rgba(4,8,40,0.85);
    border: 1px solid rgba(255,255,255,0.28);
    color: #fff;
}
.dd-panel::-webkit-scrollbar { height: 3px; }
.dd-panel::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 20px; }

/* ══════════════════════
   MOBILE ≤ 1199px
══════════════════════ */
@media (max-width: 1199px) {

    /* Navbar shell — side padding so pill doesn't touch screen edges */
    .main-navbar {
        padding: 8px 12px;
    }

    /* Full width inner */
    .navbar-inner {
        width: 100%;
    }

    /* Pill becomes a vertical block */
    .nav-pill {
        flex-direction: column;
        align-items: stretch;
        border-radius: 18px;
        padding: 0;
        gap: 0;
        overflow: hidden; /* clips sub-menus neatly */
    }

    /* Show mobile top row (logo + hamburger) */
    .mobile-toprow {
        display: flex;
        align-items: center;
        padding: 10px 14px;
        gap: 8px;
        min-height: 52px;
    }

    /* Hide nav list by default on mobile */
    .nav-links {
        display: none;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        flex: none;
        width: 100%;
        gap: 2px;
        padding: 4px 10px 10px;
        border-top: 1px solid rgba(255,255,255,0.08);
    }
    .nav-links.open { display: flex; }

    .nav-links > li { width: 100%; }

    .nav-link-item {
        width: 100%;
        justify-content: space-between;
        height: auto;
        padding: 12px 14px;
        border-radius: 12px;
        font-size: 15px;
        white-space: normal; /* allow wrapping on very small screens */
    }

    /* Desktop panels fully disabled on mobile */
    .dd-panel {
        display: none !important;
        pointer-events: none !important;
    }

    /* Mobile sub-menu — collapsed by default */
    .mobile-sub {
        list-style: none;
        margin: 0 0 4px 0;
        padding: 0;
        display: none; /* toggled to flex via .open class */
        flex-direction: column;
        gap: 0;
        border-left: 2px solid rgba(93,141,255,0.35);
        margin-left: 14px;
        padding-left: 4px;
    }
    .mobile-sub.open {
        display: flex;
    }
    .mobile-sub li { list-style: none; }
    .mobile-sub a {
        display: block;
        padding: 10px 14px;
        color: rgba(255,255,255,0.75);
        text-decoration: none;
        font-size: 13.5px;
        font-weight: 400;
        border-radius: 10px;
        transition: background .2s, color .2s;
    }
    .mobile-sub a:hover,
    .mobile-sub a.is-active {
        background: rgba(255,255,255,0.08);
        color: #fff;
    }
}

/* ══════════════════════
   SMALL MOBILE ≤ 768px
══════════════════════ */
@media (max-width: 768px) {
    .top-bar { padding: 7px 0; }
    .topbar-wrapper { flex-direction: column; text-align: center; gap: 6px; }
    .left-info { justify-content: center; gap: 10px; }
    .left-info a { font-size: 12px; }
    .social-icons { justify-content: center; }
}
</style>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const MOBILE_BP    = 1199;
    const isMobile     = () => window.innerWidth <= MOBILE_BP;

    const dropdownItems = document.querySelectorAll('.has-dropdown');
    const btn           = document.getElementById('hamburgerBtn');
    const navList       = document.getElementById('navLinks');
    let   hideTimers    = {};

    /* ─────────────────────────────────────
       Helper: close all mobile sub-menus
    ───────────────────────────────────── */
    function closeAllMobileSubs() {
        dropdownItems.forEach(item => {
            item.classList.remove('dd-open');
            const sub = item.querySelector('.mobile-sub');
            if (sub) sub.classList.remove('open');
        });
    }

    /* ─────────────────────────────────────
       Helper: close all desktop panels
    ───────────────────────────────────── */
    function closeAllDesktopPanels() {
        dropdownItems.forEach(item => {
            item.classList.remove('dd-open');
            const p = document.getElementById(item.dataset.panel);
            if (p) p.classList.remove('dd-visible');
        });
    }

    /* ─────────────────────────────────────
       Desktop: hover behaviour
    ───────────────────────────────────── */
    dropdownItems.forEach(item => {
        const panelId = item.dataset.panel;
        const panel   = panelId ? document.getElementById(panelId) : null;

        item.addEventListener('mouseenter', () => {
            if (isMobile() || !panel) return;
            clearTimeout(hideTimers[panelId]);
            // Close other panels first
            dropdownItems.forEach(other => {
                if (other !== item) {
                    other.classList.remove('dd-open');
                    const op = document.getElementById(other.dataset.panel);
                    if (op) op.classList.remove('dd-visible');
                }
            });
            item.classList.add('dd-open');
            panel.classList.add('dd-visible');
        });

        item.addEventListener('mouseleave', () => {
            if (isMobile() || !panel) return;
            hideTimers[panelId] = setTimeout(() => {
                item.classList.remove('dd-open');
                panel.classList.remove('dd-visible');
            }, 150);
        });

        if (panel) {
            panel.addEventListener('mouseenter', () => {
                if (isMobile()) return;
                clearTimeout(hideTimers[panelId]);
            });
            panel.addEventListener('mouseleave', () => {
                if (isMobile()) return;
                hideTimers[panelId] = setTimeout(() => {
                    item.classList.remove('dd-open');
                    panel.classList.remove('dd-visible');
                }, 150);
            });
        }

        /* ─────────────────────────────────────
           Mobile: click to toggle sub-menu
        ───────────────────────────────────── */
        const link = item.querySelector('.nav-link-item');
        const sub  = item.querySelector('.mobile-sub');

        if (link && sub) {
            link.addEventListener('click', (e) => {
                if (!isMobile()) return;
                e.preventDefault();
                const isOpen = sub.classList.contains('open');
                // Close all other subs first
                dropdownItems.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('dd-open');
                        const os = other.querySelector('.mobile-sub');
                        if (os) os.classList.remove('open');
                    }
                });
                // Toggle this one
                sub.classList.toggle('open', !isOpen);
                item.classList.toggle('dd-open', !isOpen);
            });
        }
    });

    /* ─────────────────────────────────────
       Hamburger toggle
    ───────────────────────────────────── */
    if (btn && navList) {
        btn.addEventListener('click', () => {
            const isOpen = navList.classList.toggle('open');
            btn.querySelector('i').className = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars';
            // Close all sub-menus when collapsing the nav
            if (!isOpen) {
                closeAllMobileSubs();
            }
        });
    }

    /* ─────────────────────────────────────
       Close on outside click
    ───────────────────────────────────── */
    document.addEventListener('click', (e) => {
        const header = document.querySelector('.site-header');
        if (header && header.contains(e.target)) return;

        if (isMobile()) {
            // Close mobile nav
            if (navList) navList.classList.remove('open');
            if (btn) btn.querySelector('i').className = 'fa-solid fa-bars';
            closeAllMobileSubs();
        } else {
            closeAllDesktopPanels();
        }
    });

    /* ─────────────────────────────────────
       Reset on resize (mobile ↔ desktop)
    ───────────────────────────────────── */
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if (!isMobile()) {
                // Switching to desktop — reset mobile state
                if (navList) navList.classList.remove('open');
                if (btn) btn.querySelector('i').className = 'fa-solid fa-bars';
                closeAllMobileSubs();
            } else {
                // Switching to mobile — reset desktop panel state
                closeAllDesktopPanels();
            }
        }, 100);
    });

});
</script>