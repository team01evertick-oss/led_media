<section class="meeting-display-section">

    <div class="meeting-display-container meeting-display-grid">

        <!-- LEFT -->
        <div class="meeting-display-content">

            <h2>
                Where It Is Used
            </h2>

            <ul>

                <li>Corporate meeting rooms</li>

                <li>Government institutions</li>

                <li>Conference halls</li>

                <li>Command centers</li>

                <li>Executive boardrooms</li>

            </ul>

        </div>

        <!-- RIGHT -->
        <div class="meeting-display-box-wrapper">

            <!-- TOP -->
            <div class="meeting-display-top-row">

                <div class="meeting-display-box"></div>

                <div class="meeting-display-box"></div>

            </div>

            <!-- BOTTOM -->
            <div class="meeting-display-bottom-row">

                <div class="meeting-display-box"></div>

                <div class="meeting-display-box"></div>

                <div class="meeting-display-box"></div>

            </div>

        </div>

    </div>

</section>

<style>

.meeting-display-section{
    width:100%;
    padding:80px 0;
    background:linear-gradient(90deg,#0a3ca7 0%, #02004d 100%);
    overflow:hidden;
    font-family:Arial,sans-serif;
}

.meeting-display-container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.meeting-display-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:70px;
}

/* LEFT CONTENT */

.meeting-display-content h2{
    font-size:52px;
    font-weight:700;
    color:#fff;
    margin-bottom:30px;
}

.meeting-display-content ul{
    padding-left:22px;
}

.meeting-display-content ul li{
    color:#fff;
    font-size:20px;
    line-height:1.9;
    margin-bottom:4px;
}

/* RIGHT BOX WRAPPER */

.meeting-display-box-wrapper{
    display:flex;
    flex-direction:column;
    gap:18px;
    align-items:center;
}

/* TOP ROW */

.meeting-display-top-row{
    display:flex;
    gap:18px;
}

/* BOTTOM ROW */

.meeting-display-bottom-row{
    display:flex;
    gap:18px;
}

/* BOX */

.meeting-display-box{
    width:120px;
    height:120px;
    background:#88a7d4;
    border-radius:14px;
}

/* RESPONSIVE */

@media(max-width:991px){

    .meeting-display-grid{
        grid-template-columns:1fr;
        text-align:center;
    }

    .meeting-display-content ul{
        display:inline-block;
        text-align:left;
    }

    .meeting-display-content h2{
        font-size:40px;
    }

}

@media(max-width:576px){

    .meeting-display-section{
        padding:60px 0;
    }

    .meeting-display-content h2{
        font-size:32px;
    }

    .meeting-display-content ul li{
        font-size:16px;
    }

    .meeting-display-box{
        width:80px;
        height:80px;
    }

    .meeting-display-top-row,
    .meeting-display-bottom-row{
        gap:10px;
    }

}

</style>