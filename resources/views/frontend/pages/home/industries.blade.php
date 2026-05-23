<!-- =========================================================
     INDUSTRIES SECTION
========================================================= -->

<section class="industries-section">

    <div class="container">

        <div class="industries-wrapper">

            <!-- LEFT -->
            <div class="industries-left">

                <h2>
                    Industries Served
                </h2>

                <h3>
                    Supporting Multiple
                    <br>
                    Industries Across
                    <br>
                    Cambodia
                </h3>

                <p>
                    LED Media provides LED display
                    solutions for multiple industries
                    including retail, banking, outdoor
                    advertising, hospitality, and
                    commercial developments.
                </p>

            </div>

            <!-- RIGHT -->
            <div class="industries-grid">

                <div class="industry-card">
                    Corporate Offices
                </div>

                <div class="industry-card">
                    Outdoor Advertising Companies
                </div>

                <div class="industry-card">
                    Commercial Buildings
                    & Developers
                </div>

                <div class="industry-card">
                    Concerts, Exhibitions
                    & Event Venues
                </div>

                <div class="industry-card">
                    Banks & Financial Institutions
                </div>

                <div class="industry-card">
                    Retail Stores &
                    Shopping Malls
                </div>

                <div class="industry-card">
                    Hotels &
                    Hospitality Businesses
                </div>

                <div class="industry-card">
                    Government &
                    Public Sector
                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     SERVICE SECTION
========================================================= -->

<section class="service-section">

    <div class="container">

        <div class="service-wrapper">

            <!-- IMAGE -->
            <div class="service-image">

                <img
                    src="{{ asset('image/home_page_bg1.png') }}"
                    alt="Service Preview"
                >

            </div>

            <!-- CONTENT -->
            <div class="service-content">

                <h2>
                    Service &
                    Maintenance
                </h2>

                <h3>
                    Long-Term LED Support
                    & Maintenance Services
                </h3>

                <p>
                    Our commitment continues after installation.
                    LED Media provides preventive maintenance,
                    troubleshooting, repair support, spare part
                    readiness, and technical consultation.
                </p>

                <p>
                    We focus on minimizing downtime,
                    extending equipment lifespan,
                    and supporting clients with
                    responsive technical service.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     DISPLAY INSIGHTS SECTION
========================================================= -->

<section class="display-insights-section">

    <div class="container">

                <div class="display-insights-header">

                    <h2>
                        Insights Preview
                    </h2>

                    <h3>
                        LED Knowledge &
                        Commercial Display Insights
                    </h3>

                    <p>
                        Explore industry insights,
                        LED buying guides,
                        maintenance tips,
                        and commercial display trends.
                    </p>

                </div>

                <div class="display-insights-grid">

                    <!-- TOP 3 CARDS -->
                    <div class="top-card">

                        <div class="display-insights-card">

                            <span>01</span>

                            <h4>
                                Indoor vs Outdoor LED Displays
                            </h4>

                        </div>

                        <div class="display-insights-card">

                            <span>02</span>

                            <h4>
                                How to Choose the Right LED Billboard
                            </h4>

                        </div>

                        <div class="display-insights-card">

                            <span>03</span>

                            <h4>
                                LED Maintenance Best Practices
                            </h4>

                        </div>

                    </div>

                    <!-- BOTTOM 2 CARDS -->
                    <div class="bottom-card">

                        <div class="display-insights-card">

                            <span>04</span>

                            <h4>
                                Fine Pixel Display Guide
                            </h4>

                        </div>

                        <div class="display-insights-card">

                            <span>05</span>

                            <h4>
                                Commercial LED Installation Tips
                            </h4>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

</section>

<!-- =========================================================
     CTA SECTION
========================================================= -->

<section class="cta-section">

    <div class="container">

        <div class="cta-wrapper">

            <!-- LEFT -->
            <div class="cta-content">

                <h2>
                    Let’s Build Your Next
                    LED Display Project
                </h2>

                <p>
                    Whether you are planning an outdoor billboard,
                    commercial display, retail installation,
                    or entertainment LED project,
                    LED Media is ready to support you
                    with reliable solutions and
                    professional execution.
                </p>

                <div class="cta-buttons">

                    <a href="#"
                       class="cta-btn-primary">

                        Request Quotation

                    </a>

                    <a href="#"
                       class="cta-btn-dark">

                        Request Consultation

                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="cta-image">

                <img
                    src="{{ asset('image/home_page_bg1.png') }}"
                    alt="LED Display"
                >

            </div>

        </div>

    </div>

</section>
<style>
    /* =========================================================
   GLOBAL WHITE STYLE
========================================================= */

body{

    background: #ffffff !important;

    color: #111827;

    font-family: 'Poppins', sans-serif;

    overflow-x: hidden;
}


/* =========================================================
   INDUSTRIES SECTION
========================================================= */

.industries-section{

    position: relative;

    padding: 120px 0;

    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #f5f9ff 100%
        );

    overflow: hidden;
}


/* BLUE LIGHT */

.industries-section::before{

    content: "";

    position: absolute;

    top: -180px;
    right: -180px;

    width: 500px;
    height: 500px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.10),
            transparent 70%
        );

    z-index: 1;
}


.industries-section .container{

    position: relative;

    z-index: 2;
}


/* =========================================================
   INDUSTRIES WRAPPER
========================================================= */

.industries-wrapper{

    display: grid;

    grid-template-columns:
        380px 1fr;

    gap: 70px;

    align-items: start;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

.industries-left h2{

    color: #111827;

    font-size: 46px;

    font-weight: 100;

    line-height: 1.2;

    margin-bottom: 18px;
}


.industries-left h3{

    color: #0057ff;

    font-size: 42px;

    font-weight: 700;

    line-height: 1.2;

    margin-bottom: 22px;
}


.industries-left p{

    color: #6b7280;

    font-size: 16px;

    line-height: 1.9;
}


/* =========================================================
   INDUSTRIES GRID
========================================================= */

.industries-grid{

    display: grid;

    grid-template-columns:
        repeat(4, 1fr);

    gap: 20px;
}


/* =========================================================
   INDUSTRY CARD
========================================================= */

.industry-card{

    min-height: 130px;

    padding: 28px 24px;

    border-radius: 22px;

    background: #ffffff;

    border:
        1px solid rgba(0,0,0,.08);

    color: #111827;

    font-size: 15px;

    font-weight: 500;

    line-height: 1.7;

    display: flex;

    align-items: center;

    transition: .35s ease;

    box-shadow:
        0 10px 30px rgba(0,0,0,.04);
}


.industry-card:hover{

    transform: translateY(-6px);

    border:
        1px solid rgba(0,102,255,.20);

    box-shadow:
        0 20px 40px rgba(0,102,255,.12);
}


/* =========================================================
   SERVICE SECTION
========================================================= */

.service-section{

    position: relative;

    padding: 120px 0;

    background: #ffffff;
}


.service-wrapper{

    display: grid;

    grid-template-columns:
        1fr 1fr;

    gap: 70px;

    align-items: center;
}


/* =========================================================
   SERVICE IMAGE
========================================================= */

.service-image{

    border-radius: 28px;

    overflow: hidden;

    box-shadow:
        0 20px 50px rgba(0,0,0,.08);
}


.service-image img{

    width: 100%;

    display: block;

    object-fit: cover;
}


/* =========================================================
   SERVICE CONTENT
========================================================= */

.service-content h2{

    color: #111827;

    font-size: 52px;

    font-weight: 100;

    line-height: 1.1;

    margin-bottom: 20px;
}


.service-content h3{

    color: #0057ff;

    font-size: 34px;

    font-weight: 700;

    line-height: 1.3;

    margin-bottom: 24px;
}


.service-content p{

    color: #6b7280;

    font-size: 16px;

    line-height: 1.9;

    margin-bottom: 20px;
}


/* =========================================================
   INSIGHTS SECTION
========================================================= */

.display-insights-section{

    position: relative;

    padding: 120px 0;

    background:
        linear-gradient(
            180deg,
            #f8fbff 0%,
            #b3b1d2 100%
        );

    overflow: hidden;
}


/* SOFT BLUE GLOW */

.display-insights-section::before{

    content: "";

    position: absolute;

    bottom: -200px;
    left: -200px;

    width: 500px;
    height: 500px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.08),
            transparent 70%
        );
}


/* =========================================================
   INSIGHTS HEADER
========================================================= */

.display-insights-header{

    margin-bottom: 60px;
}


.display-insights-header h2{

    color: #111827;

    font-size: 48px;

    font-weight: 100;

    margin-bottom: 16px;
}


.display-insights-header h3{

    color: #0057ff;

    font-size: 40px;

    font-weight: 700;

    line-height: 1.2;

    margin-bottom: 24px;
}


.display-insights-header p{

    color: #6b7280;

    font-size: 16px;

    line-height: 1.9;

    max-width: 700px;
}


/* =========================================================
   INSIGHTS GRID
========================================================= */

.display-insights-grid{

    display: flex;

    flex-direction: column;

    gap: 24px;
}


.top-card{

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 24px;
}


.bottom-card{

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 24px;

    max-width: 68%;

    margin: auto;
}


/* =========================================================
   INSIGHTS CARD
========================================================= */

.display-insights-card{

    background: #ffffff;

    border-radius: 26px;

    padding: 36px;

    min-height: 240px;

    border:
        1px solid rgba(0,0,0,.08);

    transition: .35s ease;

    box-shadow:
        0 10px 35px rgba(0,0,0,.04);
}


.display-insights-card:hover{

    transform: translateY(-6px);

    border:
        1px solid rgba(0,102,255,.20);

    box-shadow:
        0 20px 40px rgba(0,102,255,.10);
}


.display-insights-card span{

    display: block;

    color: #0057ff;

    font-size: 58px;

    font-weight: 100;

    margin-bottom: 28px;
}


.display-insights-card h4{

    color: #111827;

    font-size: 24px;

    font-weight: 600;

    line-height: 1.5;
}


/* =========================================================
   CTA SECTION
========================================================= */

.cta-section{

    position: relative;

    padding: 120px 0;

    background: #ffffff;
}


/* =========================================================
   CTA WRAPPER
========================================================= */

.cta-wrapper{

    background:
        linear-gradient(
            135deg,
            #f8fbff 0%,
            #ffffff 100%
        );

    border-radius: 40px;

    padding: 70px;

    display: grid;

    grid-template-columns:
        1fr 520px;

    gap: 70px;

    align-items: center;

    border:
        1px solid rgba(0,0,0,.06);

    box-shadow:
        0 20px 60px rgba(0,0,0,.05);
}


/* =========================================================
   CTA CONTENT
========================================================= */

.cta-content h2{

    color: #111827;

    font-size: 56px;

    font-weight: 100;

    line-height: 1.15;

    margin-bottom: 28px;
}


.cta-content p{

    color: #6b7280;

    font-size: 17px;

    line-height: 1.9;

    margin-bottom: 36px;
}


/* =========================================================
   CTA BUTTONS
========================================================= */

.cta-buttons{

    display: flex;

    gap: 18px;

    flex-wrap: wrap;
}


.cta-btn-primary,
.cta-btn-dark{

    height: 58px;

    padding: 0 34px;

    border-radius: 60px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    text-decoration: none;

    font-size: 15px;

    font-weight: 600;

    transition: .35s ease;
}


.cta-btn-primary{

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    color: #ffffff;

    box-shadow:
        0 12px 30px rgba(0,102,255,.20);
}


.cta-btn-dark{

    background: #111827;

    color: #ffffff;
}


.cta-btn-primary:hover,
.cta-btn-dark:hover{

    transform: translateY(-4px);
}


/* =========================================================
   CTA IMAGE
========================================================= */

.cta-image{

    border-radius: 30px;

    overflow: hidden;

    box-shadow:
        0 20px 50px rgba(0,0,0,.08);
}


.cta-image img{

    width: 100%;

    display: block;

    object-fit: cover;
}



/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .industries-wrapper,
    .service-wrapper,
    .cta-wrapper,
    .footer-grid{

        grid-template-columns: 1fr;
    }

    .industries-grid{

        grid-template-columns:
            repeat(2,1fr);
    }

    .top-card,
    .bottom-card{

        grid-template-columns:1fr;

        max-width: 100%;
    }

    .cta-wrapper{

        padding: 50px;
    }
}


@media(max-width:576px){

    .industries-grid{

        grid-template-columns:1fr;
    }

    .industries-left h2,
    .service-content h2,
    .display-insights-header h2,
    .cta-content h2{

        font-size: 34px;
    }

    .industries-left h3,
    .service-content h3,
    .display-insights-header h3{

        font-size: 28px;
    }

    .cta-wrapper{

        padding: 35px 24px;
    }

    .cta-buttons{

        flex-direction: column;
    }

    .cta-btn-primary,
    .cta-btn-dark{

        width: 100%;
    }
}
</style>