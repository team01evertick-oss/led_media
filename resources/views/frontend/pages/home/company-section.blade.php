<section class="company-section">

    <div class="company-overlay"></div>

    <div class="container company-wrapper">

        <!-- LEFT CONTENT -->
        <div class="company-content">

            <h2>
                LED Media
            </h2>

            <p>

                has successfully delivered LED display
                projects and event production support
                across Phnom Penh and provinces
                nationwide.

            </p>

            <a href="#"
               class="company-btn">

                Download Company Profile

            </a>

        </div>

        <!-- RIGHT STATS -->
        <div class="company-stats">

            <div class="stat-box">

                <h3>2015</h3>

                <span>
                    Trusted Since
                </span>

            </div>

            <div class="stat-box">

                <h3>10+</h3>

                <span>
                    Years of Industry
                    Experience
                </span>

            </div>

            <div class="stat-box">

                <h3>30+</h3>

                <span>
                    Professional
                    Team Members
                </span>

            </div>

            <div class="stat-box">

                <h3>3</h3>

                <span>
                    Production
                    Warehouses
                    In Cambodia
                </span>

            </div>

            <div class="stat-box">

                <h3>
                    Indoor &
                    Outdoor
                </h3>

                <span>
                    LED Specialists
                </span>

            </div>

            <div class="stat-box">

                <h3>
                    Trusted
                </h3>

                <span>
                    by Banks, Retail Chains,
                    Government & Corporate
                    Clients
                </span>

            </div>

        </div>

    </div>

</section>
<style>
    /* =========================================================
   COMPANY SECTION
========================================================= */

.company-section{

    position: relative;

    padding: 120px 0;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #020b2d 0%,
            #040b3d 35%,
            #010114 100%
        );
}


/* =========================================================
   BLUE GLOW EFFECT
========================================================= */

.company-section::before{

    content: "";

    position: absolute;

    width: 900px;
    height: 900px;

    left: -300px;
    bottom: -300px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.22),
            transparent 70%
        );

    filter: blur(20px);

    z-index: 0;
}


/* =========================================================
   OVERLAY
========================================================= */

.company-overlay{

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.02),
            transparent 50%
        );

    z-index: 1;
}


/* =========================================================
   CONTAINER
========================================================= */

.company-section .container{

    max-width: 1320px;
}


/* =========================================================
   WRAPPER
========================================================= */

.company-wrapper{

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        420px 1fr;

    gap: 80px;

    align-items: center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

.company-content{

    max-width: 420px;
}


.company-content h2{

    color: #0080ff;

    font-size: 64px;
    font-weight: 100;

    line-height: 1.1;

    letter-spacing: -1px;

    margin-bottom: 28px;
}


.company-content p{

    color: rgba(255,255,255,.82);

    font-size: 18px;

    line-height: 2;

    margin-bottom: 42px;
}


/* =========================================================
   BUTTON
========================================================= */

.company-btn{

    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 240px;

    height: 58px;

    padding: 0 34px;

    border-radius: 60px;

    text-decoration: none;

    color: #ffffff;

    font-size: 14px;
    font-weight: 600;

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    box-shadow:
        0 12px 28px rgba(0,102,255,.30);

    transition: .35s ease;
}


.company-btn:hover{

    transform: translateY(-4px);

    color: #ffffff;

    box-shadow:
        0 20px 40px rgba(0,102,255,.40);
}


/* =========================================================
   STATS GRID
========================================================= */

.company-stats{

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 22px;
}


/* =========================================================
   STAT BOX
========================================================= */

.stat-box{

    position: relative;

    min-height: 220px;

    padding: 34px 28px;

    border-radius: 24px;

    overflow: hidden;

    background:
        linear-gradient(
            180deg,
            rgba(231, 223, 223, 0.04),
            rgba(255,255,255,.015)
        );

    border:
        1px solid rgba(255,255,255,.10);

    backdrop-filter: blur(16px);

    -webkit-backdrop-filter: blur(16px);

    transition: .35s ease;
}


/* LIGHT EFFECT */

.stat-box::before{

    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.08),
            transparent 60%
        );

    opacity: 0;

    transition: .35s ease;
}


/* HOVER */

.stat-box:hover{

    transform: translateY(-8px);

    border:
        1px solid rgba(0,102,255,.45);

    box-shadow:
        0 20px 45px rgba(0,0,0,.35);
}


.stat-box:hover::before{

    opacity: 1;
}


/* =========================================================
   STAT TITLE
========================================================= */

.stat-box h3{

    color: #0080ff;

    font-size: 30px;
    font-weight: 100;

    line-height: 1.2;

    margin-bottom: 20px;

    letter-spacing: -.5px;
}


/* =========================================================
   STAT TEXT
========================================================= */

.stat-box span{

    display: block;

    color: rgba(255,255,255,.82);

    font-size: 15px;
    font-weight: 100;

    line-height: 1.8;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .company-section{

        padding: 90px 0;
    }

    .company-wrapper{

        grid-template-columns: 1fr;

        gap: 60px;
    }

    .company-content{

        max-width: 100%;
    }

    .company-content h2{

        font-size: 48px;
    }

    .company-content p{

        font-size: 16px;
    }

    .company-stats{

        grid-template-columns:
            repeat(2,1fr);
    }
}


@media(max-width:576px){

    .company-section{

        padding: 70px 0;
    }

    .company-content h2{

        font-size: 38px;
    }

    .company-content p{

        font-size: 15px;

        line-height: 1.8;
    }

    .company-btn{

        width: 100%;
    }

    .company-stats{

        grid-template-columns: 1fr;
    }

    .stat-box{

        min-height: auto;
    }

    .stat-box h3{

        font-size: 38px;
    }
}

</style>