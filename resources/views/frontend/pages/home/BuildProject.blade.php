<!-- =========================================================
     CTA SECTION
========================================================= -->
<section class="led-cta-section">

    <div class="led-cta-container">

        {{-- LEFT CONTENT --}}
        <div class="led-cta-content">

            <h2>
                Let’s Build Your Next LED
                <span>Display Project</span>
            </h2>

            <p>
                Whether you are planning an outdoor billboard,
                corporate display, retail installation, or commercial
                LED project, LED Media is ready to support you
                with reliable solutions and professional execution.
            </p>

            <div class="led-cta-buttons">

                <a href="#" class="btn-primary-led">
                    Request Quotation
                </a>

                <a href="#" class="btn-secondary-led">
                    Request Consultation
                </a>

            </div>

        </div>

        {{-- RIGHT IMAGE --}}
        <div class="led-cta-image">

            <img src="{{ asset('storage/image/home_page_bg1.png') }}"
             alt="LED Display">

        </div>

    </div>

</section>
<style>
 /* =========================================================
   LED CTA SECTION
========================================================= */

.led-cta-section{
    width:100%;
    background:#ffffff;
    padding:100px 8%;
    overflow:hidden;
}

.led-cta-container{
    max-width:1300px;
    margin:auto;

    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:60px;
}

/* =========================================================
   LEFT CONTENT
========================================================= */

.led-cta-content{
    flex:1;
    max-width:520px;
}

.led-cta-content h2{
    color:#111;
    font-size:52px;
    line-height:1.1;
    font-weight:700;
    margin-bottom:24px;
}

.led-cta-content h2 span{
    display:block;
}

.led-cta-content p{
    color:#666;
    font-size:16px;
    line-height:1.8;
    margin-bottom:35px;
}

/* =========================================================
   BUTTONS
========================================================= */

.led-cta-buttons{
    display:flex;
    align-items:center;
    gap:18px;
    flex-wrap:wrap;
}

.btn-primary-led,
.btn-secondary-led{
    padding:14px 28px;
    border-radius:50px;
    font-size:14px;
    font-weight:500;
    text-decoration:none;
    transition:0.4s ease;
}

/* PRIMARY */

.btn-primary-led{
    background:linear-gradient(90deg,#0d6efd,#003cff);
    color:#fff;
    box-shadow:0 8px 20px rgba(13,110,253,0.2);
}

.btn-primary-led:hover{
    transform:translateY(-3px);
}

/* SECONDARY */

.btn-secondary-led{
    border:1px solid #dcdcdc;
    color:#111;
    background:#fff;
}

.btn-secondary-led:hover{
    background:#f5f5f5;
    border-color:#bbb;
}

/* =========================================================
   IMAGE
========================================================= */

.led-cta-image{
    flex:1;
    display:flex;
    justify-content:flex-end;
}

.led-cta-image img{
    width:100%;
    max-width:620px;
    border-radius:28px;
    object-fit:cover;
    box-shadow:0 20px 50px rgba(0,0,0,0.12);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .led-cta-container{
        flex-direction:column;
        text-align:center;
    }

    .led-cta-content{
        max-width:100%;
    }

    .led-cta-buttons{
        justify-content:center;
    }

    .led-cta-image{
        justify-content:center;
    }

    .led-cta-content h2{
        font-size:40px;
    }
}

@media(max-width:576px){

    .led-cta-section{
        padding:70px 20px;
    }

    .led-cta-content h2{
        font-size:32px;
    }

    .btn-primary-led,
    .btn-secondary-led{
        width:100%;
        text-align:center;
    }
}
</style>