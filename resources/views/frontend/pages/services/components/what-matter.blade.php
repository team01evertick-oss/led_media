<section class="maintenance-matters-section">

    <div class="maintenance-wrapper">

        <!-- TITLE -->

        <div class="maintenance-title-box">

            <h2>
                What Makes LED Media
                <br>
                Different
            </h2>

        </div>

        <!-- BENEFITS -->

        <div class="maintenance-benefits-box">

            <!-- CARD -->

            <div class="maintenance-benefit-item">

                <span>01</span>

                <h3>
                    Commercial Project
                    Focus
                </h3>

                <p>
                    Routine inspections and system
                    checks to maintain stable LED
                    performance and reduce
                    operational risks.
                </p>

            </div>

            <!-- CARD -->

            <div class="maintenance-benefit-item">

                <span>02</span>

                <h3>
                    Experienced Technical
                    Team
                </h3>

                <p>
                    Our team combines technical
                    knowledge, project coordination,
                    and installation expertise to
                    ensure reliable project execution.
                </p>

            </div>

            <!-- CARD -->

            <div class="maintenance-benefit-item">

                <span>03</span>

                <h3>
                    Structured Workflow &
                    Planning
                </h3>

                <p>
                    We maintain clear project
                    workflows, planning systems,
                    and execution processes to
                    support smooth delivery and
                    operational efficiency.
                </p>

            </div>

            <!-- CARD -->

            <div class="maintenance-benefit-item">

                <span>04</span>

                <h3>
                    Reliable Long-Term
                    Support
                </h3>

                <p>
                    From consultation and installation
                    to maintenance and repair,
                    we provide ongoing support to
                    help clients maintain stable
                    LED performance.
                </p>

            </div>

            <!-- CARD -->

            <div class="maintenance-benefit-item">

                <span>05</span>

                <h3>
                    Trusted by Leading
                    Organizations
                </h3>

                <p>
                    LED Media has successfully
                    delivered projects for banks,
                    commercial brands, government
                    institutions, hotels, and major
                    organizations across Cambodia.
                </p>

            </div>

        </div>

    </div>

</section>

<style>

/* =========================================================
   SECTION
========================================================= */

.maintenance-matters-section{
    width:100%;
    padding:90px 0;

    background:
        linear-gradient(
            90deg,
            #0018c9 0%,
            #0917ff 50%,
            #000f7d 100%
        );

    position:relative;
    overflow:hidden;
}

/* LIGHT LINE EFFECT */

.maintenance-matters-section::before{
    content:"";
    position:absolute;
    inset:0;

    background:
        repeating-linear-gradient(
            90deg,
            rgba(255,255,255,0.05) 0px,
            rgba(255,255,255,0.05) 1px,
            transparent 1px,
            transparent 6px
        );

    opacity:0.45;
}

/* =========================================================
   WRAPPER
========================================================= */

.maintenance-wrapper{
    width:90%;
    max-width:1100px;
    margin:auto;
    position:relative;
    z-index:2;
    font-family:Arial,sans-serif;
}

/* =========================================================
   TITLE
========================================================= */

.maintenance-title-box{
    text-align:center;
    margin-bottom:55px;
}

.maintenance-title-box h2{
    color:#fff;
    font-size:44px;
    font-weight:200;
    line-height:1.3;
}

/* =========================================================
   GRID
========================================================= */

.maintenance-benefits-box{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:24px;
    justify-content:center;
}

/* CENTER LAST 2 CARDS */

.maintenance-benefit-item:nth-child(4){
    grid-column:1 / 2;
    margin-left:auto;
}

.maintenance-benefit-item:nth-child(5){
    grid-column:2 / 3;
    margin-right:auto;
}

/* =========================================================
   CARD
========================================================= */

.maintenance-benefit-item{
    min-height:230px;

    padding:24px;

    border-radius:16px;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,0.08),
            rgba(255,255,255,0.03)
        );

    border:1px solid rgba(255,255,255,0.45);

    backdrop-filter:blur(6px);

    transition:0.35s ease;
}

.maintenance-benefit-item:hover{
    transform:translateY(-5px);
    border-color:#fff;
}

/* NUMBER */

.maintenance-benefit-item span{
    display:block;
    color:rgba(180,210,255,0.95);
    font-size:42px;
    font-weight:200;
    margin-bottom:12px;
}

/* TITLE */

.maintenance-benefit-item h3{
    color:#fff;
    font-size:20px;
    font-weight:600;
    line-height:1.5;
    margin-bottom:14px;
}

/* TEXT */

.maintenance-benefit-item p{
    color:rgba(255,255,255,0.82);
    font-size:14px;
    line-height:1.8;
    font-weight:300;
}

/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    .maintenance-benefits-box{
        grid-template-columns:repeat(2,1fr);
    }

    .maintenance-benefit-item:nth-child(4),
    .maintenance-benefit-item:nth-child(5){
        grid-column:auto;
        margin:auto;
    }

    .maintenance-title-box h2{
        font-size:36px;
    }

}

/* =========================================================
   MOBILE
========================================================= */

@media(max-width:576px){

    .maintenance-matters-section{
        padding:70px 0;
    }

    .maintenance-wrapper{
        width:92%;
    }

    .maintenance-title-box{
        margin-bottom:40px;
    }

    .maintenance-title-box h2{
        font-size:28px;
    }

    .maintenance-benefits-box{
        grid-template-columns:1fr;
        gap:18px;
    }

    .maintenance-benefit-item{
        min-height:auto;
        padding:22px 18px;
    }

    .maintenance-benefit-item span{
        font-size:34px;
    }

    .maintenance-benefit-item h3{
        font-size:17px;
    }

    .maintenance-benefit-item p{
        font-size:13px;
        line-height:1.7;
    }

}

</style>