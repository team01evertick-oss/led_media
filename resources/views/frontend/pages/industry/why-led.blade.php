<section class="outdoor-solutions-section">

    <div class="outdoor-solutions-container">

        <!-- LEFT CONTENT -->
        <div class="outdoor-solutions-content">

            <h4>
                Our Solutions
                <br>
                for Outdoor
                <br>
                Advertising
            </h4>

        </div>

        <!-- RIGHT GRID -->
        <div class="outdoor-solutions-grid">

            <div class="outdoor-solution-card">
                Outdoor LED
                billboards
            </div>

            <div class="outdoor-solution-card">
                Digital
                advertising
                displays
            </div>

            <div class="outdoor-solution-card">
                Large-format
                commercial
                screens
            </div>

            <div class="outdoor-solution-card">
                LED
                structural
                installation
            </div>

            <div class="outdoor-solution-card">
                Content
                management
                integration
            </div>

            <div class="outdoor-solution-card">
                Maintenance
                and repair
                support
            </div>

        </div>

    </div>

</section>

<style>

.outdoor-solutions-section{
    width:100%;
    padding:100px 0;
    background:
        linear-gradient(135deg,#05007c 0%, #001b8f 45%, #000000 100%);
    position:relative;
    overflow:hidden;
    font-family:Arial,sans-serif;
}

/* TOP CURVE EFFECT */

.outdoor-solutions-section::before{
    content:"";
    position:absolute;
    top:-120px;
    right:-120px;
    width:420px;
    height:420px;
    background:radial-gradient(
        circle,
        rgba(0,119,255,0.55) 0%,
        rgba(0,119,255,0) 70%
    );
    border-radius:50%;
}

/* CONTAINER */

.outdoor-solutions-container{
    width:95%;
    max-width:900px;
    margin:auto;
    display:grid;
    grid-template-columns:320px 1fr;
    align-items:center;
    gap:60px;
    position:relative;
    z-index:2;
}

/* LEFT */

.outdoor-solutions-content h4{
    color:#fff;
    font-size:40px;
    font-weight:100;
}

/* GRID */

.outdoor-solutions-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:15px;
}

/* CARD */

.outdoor-solution-card{
    min-height:95px;
    padding:22px 20px;
    border-radius:16px;
    border:1px solid rgba(255,255,255,0.22);
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(8px);
    color:#fff;
    font-size:16px;
    line-height:1.6;
    display:flex;
    align-items:flex-end;
    transition:0.35s ease;
}

.outdoor-solution-card:hover{
    transform:translateY(-5px);
    border-color:rgba(255,255,255,0.4);
    background:rgba(255,255,255,0.06);
}

/* TABLET */

@media(max-width:991px){

    .outdoor-solutions-container{
        grid-template-columns:1fr;
        gap:50px;
    }

    .outdoor-solutions-content{
        text-align:center;
    }

    .outdoor-solutions-content h2{
        font-size:40px;
    }

    .outdoor-solutions-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

/* MOBILE */

@media(max-width:576px){

    .outdoor-solutions-section{
        padding:60px 0;
    }

    .outdoor-solutions-content h2{
        font-size:30px;
    }

    .outdoor-solutions-grid{
        grid-template-columns:1fr;
        gap:14px;
    }

    .outdoor-solution-card{
        min-height:100px;
        font-size:14px;
        padding:18px 16px;
        border-radius:14px;
    }

}

</style>