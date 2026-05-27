<section class="service-preview-section">

    <div class="service-preview-container">

        {{-- LEFT IMAGE --}}
        <div class="service-preview-image">

           <img src="{{ asset('storage/image/home_page_bg1.png') }}"
     alt="Service & Maintenance">

        </div>

        {{-- RIGHT CONTENT --}}
        <div class="service-preview-content">

            <span class="service-small-title">
                Service & Maintenance Preview
            </span>

            <h2>
                Long-Term LED Support &
                Maintenance Services
            </h2>

            <p>
                Our commitment continues after installation.
                LED Media provides preventive maintenance,
                troubleshooting, repair support, spare part
                readiness, and technical consultation to ensure
                every LED display operates efficiently and reliably.
            </p>

            <p>
                We focus on minimizing downtime, extending
                equipment lifespan, and supporting clients
                with responsive technical service.
            </p>

        </div>

    </div>

</section>
<style>
  .service-preview-section{
    background:#ffffff;
    padding:120px 0;
}

.service-preview-container{
    width:90%;
    max-width:1300px;
    margin:auto;

    display:flex;
    align-items:center;
    gap:70px;
}

/* =========================================================
   IMAGE
========================================================= */

.service-preview-image{
    flex:1;
}

.service-preview-image img{
    width:100%;
    border-radius:28px;
    display:block;
    object-fit:cover;
    box-shadow:0 20px 50px rgba(0,0,0,0.08);
}

/* =========================================================
   CONTENT
========================================================= */

.service-preview-content{
    flex:1;
    max-width:560px;
}

.service-small-title{
    color:#0d6efd;
    font-size:16px;
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:2px;
    display:block;
    margin-bottom:18px;
}

.service-preview-content h2{
    color:#111;
    font-size:48px;
    line-height:1.2;
    margin-bottom:28px;
    font-weight:700;
}

.service-preview-content p{
    color:#666;
    font-size:17px;
    line-height:1.9;
    margin-bottom:24px;
}

/* =========================================================
   RESPONSIVE
========================================================= */

/* Tablet */
@media(max-width:991px){

    .service-preview-container{
        flex-direction:column;
        text-align:center;
    }

    .service-preview-content{
        max-width:100%;
    }

    .service-preview-content h2{
        font-size:38px;
    }

}

/* Mobile */
@media(max-width:768px){

    .service-preview-section{
        padding:80px 0;
    }

    .service-preview-container{
        width:92%;
        gap:40px;
    }

    .service-small-title{
        font-size:14px;
    }

    .service-preview-content h2{
        font-size:30px;
    }

    .service-preview-content p{
        font-size:16px;
        line-height:1.8;
    }

}
</style>