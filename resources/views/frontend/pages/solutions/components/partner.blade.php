
<!-- =========================================================
     PARTNER SECTION
========================================================= -->

<section class="partner-section">

    <!-- BACKGROUND IMAGE -->
    <div class="partner-bg">

        <img src="{{ asset('image/partner.png') }}"
             alt="Partner Background">

    </div>

    <!-- OVERLAY -->
    <div class="partner-overlay"></div>

    <div class="partner-container">

        <div class="partner-content">

            <h2>
                Partner with LED Media for professional
                installation and reliable project execution.
            </h2>

            <div class="partner-buttons">

                <a href="#" class="partner-btn primary-btn">
                    Request Consultation
                </a>

                <a href="#" class="partner-btn secondary-btn">
                    Talk to Our Team
                </a>

            </div>

        </div>

    </div>

</section>
<style>
    /* =========================================================
   PARTNER SECTION
========================================================= */

.partner-section{
    width:100%;
    min-height:420px;
    position:relative;
    overflow:hidden;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family:Arial,sans-serif;
    text-align:center;
}

/* BACKGROUND */

.partner-bg{
    position:absolute;
    inset:0;
    z-index:1;
}

.partner-bg img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

/* OVERLAY */

.partner-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(
        90deg,
        rgba(0,0,0,0.55) 0%,
        rgba(0,40,120,0.55) 50%,
        rgba(0,60,160,0.50) 100%
    );
    z-index:2;
}

/* CONTAINER */

.partner-container{
    width:100%;
    max-width:1200px;
    margin:auto;
    padding:0 20px;
    position:relative;
    z-index:3;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CONTENT */

.partner-content{
    width:100%;
    max-width:850px;
    margin:auto;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
}

/* TITLE */

.partner-content h2{
    color:#fff;
    font-size:34px;
    font-weight:300;
    line-height:1.5;
    margin-bottom:30px;
    max-width:700px;
}

/* BUTTONS */

.partner-buttons{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
}

/* BUTTON */

.partner-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-width:180px;
    padding:13px 26px;
    border-radius:50px;
    text-decoration:none;
    font-size:14px;
    font-weight:500;
    transition:0.3s ease;
}

/* PRIMARY BUTTON */

.primary-btn{
    background:linear-gradient(90deg,#0d6cff,#1f8bff);
    color:#fff;
    border:1px solid transparent;
}

.primary-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(0,102,255,0.35);
}

/* SECONDARY BUTTON */

.secondary-btn{
    background:rgba(0,0,0,0.45);
    border:1px solid rgba(255,255,255,0.18);
    color:#fff;
}

.secondary-btn:hover{
    background:rgba(255,255,255,0.08);
}

/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    .partner-section{
        min-height:360px;
        padding:70px 0;
    }

    .partner-content h2{
        font-size:28px;
        max-width:600px;
    }

}

/* =========================================================
   MOBILE
========================================================= */

@media(max-width:576px){

    .partner-section{
        min-height:auto;
        padding:60px 0;
    }

    .partner-content h2{
        font-size:22px;
        line-height:1.6;
        margin-bottom:24px;
        max-width:100%;
    }

    .partner-buttons{
        flex-direction:column;
        width:100%;
    }

    .partner-btn{
        width:100%;
        max-width:240px;
        font-size:13px;
        padding:12px 20px;
    }

}
</style>