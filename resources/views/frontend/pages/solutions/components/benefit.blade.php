<section class="meeting-display-section">

    <div class="meeting-display-container">

        <!-- TOP -->
        <div class="meeting-display-grid">

            <!-- LEFT -->
            <div class="meeting-display-content">

                <h2>Where It Is Used</h2>

                <ul>
                    @forelse($solution->uses as $use)
                        <li>{{ $use->title }}</li>
                    @empty
                        <li>No uses listed.</li>
                    @endforelse
                </ul>

            </div>

            <!-- RIGHT -->
            <div class="meeting-display-box-wrapper">

                <div class="meeting-display-grid-boxes">

                    <!-- TOP -->
                    <div class="meeting-display-box"></div>
                    <div class="meeting-display-box"></div>

                    <!-- BOTTOM -->
                    <div class="meeting-display-box"></div>
                    <div class="meeting-display-box"></div>
                    <div class="meeting-display-box"></div>

                </div>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="meeting-benefit-grid">

            <!-- IMAGE -->
            <div class="meeting-benefit-image"></div>

            <!-- BENEFITS -->
            <div class="meeting-benefit-content">

                <h2>Benefits</h2>

                <ul>
                    @forelse($solution->benefits as $benefit)
                        <li>{{ $benefit->title }}</li>
                    @empty
                        <li>No benefits listed.</li>
                    @endforelse
                </ul>

            </div>

        </div>

    </div>

</section>

<style>

/* =========================================================
   MAIN SECTION
========================================================= */

.meeting-display-section{
    width:100%;
    background:#ffffff;
    font-family:Arial,sans-serif;
    overflow:hidden;
}

.meeting-display-container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

/* =========================================================
   TOP SECTION
========================================================= */

.meeting-display-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:80px;
    padding:80px 0;
}

/* =========================================================
   LEFT CONTENT
========================================================= */

.meeting-display-content h2{
    font-size:42px;
    color:#111;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-display-content ul{
    padding-left:20px;
}

.meeting-display-content ul li{
    color:#333;
    font-size:18px;
    line-height:2;
}

/* =========================================================
   RIGHT BOXES
========================================================= */

.meeting-display-box-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CUSTOM 5 CARD LAYOUT */
.meeting-display-grid-boxes{
    display:grid;
    grid-template-columns:repeat(6, 60px);
    gap:18px;
    justify-content:center;
}

/* TOP ROW */
.meeting-display-box:nth-child(1){
    grid-column:2 / span 2;
}

.meeting-display-box:nth-child(2){
    grid-column:4 / span 2;
}

/* BOTTOM ROW */
.meeting-display-box:nth-child(3){
    grid-column:1 / span 2;
}

.meeting-display-box:nth-child(4){
    grid-column:3 / span 2;
}

.meeting-display-box:nth-child(5){
    grid-column:5 / span 2;
}

/* BOX STYLE */

.meeting-display-box{
    width:120px;
    height:120px;
    background:#dbeafe;
    border-radius:12px;
    transition:0.3s ease;
    box-shadow:0 4px 20px rgba(0,0,0,0.08);
}

.meeting-display-box:hover{
    transform:translateY(-5px);
}

/* =========================================================
   BENEFIT SECTION
========================================================= */

.meeting-benefit-grid{
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:70px;
    align-items:center;
    padding:70px 40px;
}

/* IMAGE */

.meeting-benefit-image{
    width:100%;
    height:260px;
    background:#dbeafe;
    border-radius:12px;
}

/* CONTENT */

.meeting-benefit-content h2{
    color:#111;
    font-size:42px;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-benefit-content ul{
    padding-left:20px;
}

.meeting-benefit-content ul li{
    color:#333;
    font-size:18px;
    line-height:2;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .meeting-display-grid,
    .meeting-benefit-grid{
        grid-template-columns:1fr;
        text-align:center;
    }

    .meeting-display-content ul,
    .meeting-benefit-content ul{
        display:inline-block;
        text-align:left;
    }

    .meeting-display-grid-boxes{
        grid-template-columns:repeat(6, 45px);
        gap:14px;
    }

    .meeting-display-box{
        width:90px;
        height:90px;
    }

    .meeting-benefit-image{
        height:220px;
    }

}

@media(max-width:576px){

    .meeting-display-grid{
        padding:60px 0;
        gap:50px;
    }

    .meeting-benefit-grid{
        padding:50px 20px;
        gap:40px;
    }

    .meeting-display-content h2,
    .meeting-benefit-content h2{
        font-size:30px;
    }

    .meeting-display-content ul li,
    .meeting-benefit-content ul li{
        font-size:15px;
    }

    /* MOBILE GRID */
    .meeting-display-grid-boxes{
        grid-template-columns:repeat(2, 80px);
        gap:12px;
    }

    /* RESET CUSTOM POSITION */
    .meeting-display-box:nth-child(1),
    .meeting-display-box:nth-child(2),
    .meeting-display-box:nth-child(3),
    .meeting-display-box:nth-child(4),
    .meeting-display-box:nth-child(5){
        grid-column:auto;
    }

    .meeting-display-box{
        width:80px;
        height:80px;
    }

    .meeting-benefit-image{
        height:180px;
    }

}

</style>