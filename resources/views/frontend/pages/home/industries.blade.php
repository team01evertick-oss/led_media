<!-- =========================================================
     INDUSTRIES SECTION
========================================================= -->

<section class="ind-section">

    <div class="container">

        <div class="ind-wrapper">

            <!-- ── LEFT ── -->
            <div class="ind-left">

                <p class="ind-eyebrow">Industries Served</p>

                <h2 class="ind-heading-light">Supporting Multiple<br>Industries Across<br>Cambodia</h2>

                <p class="ind-body">
                    LED Media provides LED display
                    solutions for:
                </p>

            </div>

            <!-- ── RIGHT ── -->
            <div class="ind-right">

                <!-- Row 1: 4 cards -->
                <div class="ind-row ind-row-4">

                    <a href="{{ route('industries.corporate') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-building"></i></div>
                        <p class="ind-card-label">Corporate Offices</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                    <a href="{{ route('industries.outdoorAd') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-rectangle-ad"></i></div>
                        <p class="ind-card-label">Outdoor Advertising Companies</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                    <a href="{{ route('industries.developers') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-city"></i></div>
                        <p class="ind-card-label">Commercial Buildings &amp; Developers</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                    <a href="#" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-music"></i></div>
                        <p class="ind-card-label">Concerts, Exhibitions &amp; Event Venues</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                </div>

                <!-- Row 2: 3 cards centered -->
                <div class="ind-row ind-row-3">

                    <a href="{{ route('industries.banks') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-landmark"></i></div>
                        <p class="ind-card-label">Banks &amp; Financial Institutions</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                    <a href="{{ route('industries.retail') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                        <p class="ind-card-label">Retail Stores &amp; Shopping Malls</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                    <a href="{{ route('industries.hospitality') }}" class="ind-card">
                        <div class="ind-card-icon"><i class="fa-solid fa-hotel"></i></div>
                        <p class="ind-card-label">Hotels &amp; Hospitality Businesses</p>
                        <i class="fa-solid fa-arrow-up-right ind-card-arrow"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* ─────────────────────────────────────────────
   SECTION SHELL
───────────────────────────────────────────── */
.ind-section {
    position: relative;
    padding: 110px 0;
    background: linear-gradient(160deg, #060b18 0%, #04132e 55%, #061428 100%);
    overflow: hidden;
}

/* Ambient glow orbs */
.ind-section::before,
.ind-section::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}
.ind-section::before {
    top: -220px; right: -220px;
    width: 640px; height: 640px;
    background: radial-gradient(circle, rgba(0,102,255,.17), transparent 65%);
}
.ind-section::after {
    bottom: -160px; left: -160px;
    width: 520px; height: 520px;
    background: radial-gradient(circle, rgba(0,60,200,.11), transparent 65%);
}

.ind-section .container { position: relative; z-index: 2; }

/* ─────────────────────────────────────────────
   WRAPPER — 2-col: fixed left + fluid right
───────────────────────────────────────────── */
.ind-wrapper {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 56px;
    align-items: start;
}

/* ─────────────────────────────────────────────
   LEFT COPY
───────────────────────────────────────────── */
.ind-eyebrow {
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: #4d9fff;
    margin: 0 0 20px;
}

.ind-heading-light {
    font-size: 36px;
    font-weight: 300;          /* light weight like the screenshot */
    line-height: 1.25;
    color: #ffffff;
    margin: 0 0 12px;
}

/* "Supporting Multiple..." bold blue part */
.ind-heading-light strong {
    font-weight: 700;
    color: #66b3ff;
    display: block;
}

.ind-body {
    color: rgba(255,255,255,.48);
    font-size: 14.5px;
    line-height: 1.8;
    margin: 0;
}

/* ─────────────────────────────────────────────
   RIGHT — rows
───────────────────────────────────────────── */
.ind-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* Row wrappers */
.ind-row {
    display: grid;
    gap: 16px;
}
.ind-row-4 {
    grid-template-columns: repeat(4, 1fr);
}
.ind-row-3 {
    /* 3 cards centred — each card matches the width of row-4 cards */
    grid-template-columns: repeat(4, 1fr);
}

.ind-row-3 {
    grid-template-columns: repeat(3, 1fr);
    max-width: calc(75% + 12px);   /* 3 cards = same width as 3/4 of the 4-col row */
    margin-left: auto;
    margin-right: auto;
}

/* ─────────────────────────────────────────────
   INDUSTRY CARD
───────────────────────────────────────────── */
.ind-card {
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 24px 20px 20px;
    border-radius: 18px;
    background: rgba(255,255,255,.038);
    border: 1px solid rgba(102,179,255,.20);
    text-decoration: none;
    color: #fff;
    min-height: 160px;
    overflow: hidden;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    transition: transform .28s ease,
                border-color .28s ease,
                box-shadow .28s ease,
                background .28s ease;
}

/* Blue shimmer on hover */
.ind-card::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    background: linear-gradient(130deg, rgba(0,100,255,.12) 0%, transparent 55%);
    opacity: 0;
    transition: opacity .28s ease;
}
.ind-card:hover::before { opacity: 1; }

.ind-card:hover {
    transform: translateY(-7px);
    border-color: rgba(102,179,255,.55);
    background: rgba(255,255,255,.065);
    box-shadow:
        0 22px 48px rgba(0,80,255,.22),
        inset 0 1px 0 rgba(255,255,255,.07);
}

/* Icon badge */
.ind-card-icon {
    width: 40px;
    height: 40px;
    border-radius: 11px;
    background: rgba(0,102,255,.20);
    border: 1px solid rgba(102,179,255,.28);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #66b3ff;
    margin-bottom: 14px;
    flex-shrink: 0;
    transition: background .28s, color .28s;
}
.ind-card:hover .ind-card-icon {
    background: rgba(0,102,255,.38);
    color: #fff;
}

/* Label */
.ind-card-label {
    flex: 1;
    font-size: 13.5px;
    font-weight: 500;
    color: #ddeeff;
    line-height: 1.55;
    margin: 0;
}

/* Arrow */
.ind-card-arrow {
    align-self: flex-end;
    margin-top: 14px;
    font-size: 11px;
    color: rgba(102,179,255,.35);
    transition: color .28s, transform .28s;
}
.ind-card:hover .ind-card-arrow {
    color: #66b3ff;
    transform: translate(3px, -3px);
}

/* ─────────────────────────────────────────────
   RESPONSIVE
───────────────────────────────────────────── */
@media (max-width: 1199px) {
    .ind-row-4 { grid-template-columns: repeat(2, 1fr); }
    .ind-row-3 { grid-template-columns: repeat(2, 1fr); max-width: 100%; }
}

@media (max-width: 991px) {
    .ind-wrapper {
        grid-template-columns: 1fr;
        gap: 36px;
    }
    .ind-heading-light { font-size: 30px; }
}

@media (max-width: 576px) {
    .ind-section { padding: 72px 0; }
    .ind-row-4,
    .ind-row-3 {
        grid-template-columns: 1fr;
        max-width: 100%;
    }
    .ind-heading-light { font-size: 26px; }
}

</style>