<section class="insights-section">

    <div class="insights-container">

        {{-- LEFT CONTENT --}}
        <div class="insights-heading">

            <span class="small-title">
                Insights Preview
            </span>

            <h2>
                LED Knowledge & Commercial
                Display Insights
            </h2>

            <p>
                Explore industry insights, LED display guides,
                maintenance tips, and commercial signage trends
                for any business transformation.
            </p>

        </div>

        {{-- GRID --}}
        <div class="insights-grid">

            <div class="insight-card">
                <span>01</span>
                <p>Indoor vs Outdoor LED Displays</p>
            </div>

            <div class="insight-card">
                <span>02</span>
                <p>How to Choose the Right LED Billboard</p>
            </div>

            <div class="insight-card">
                <span>03</span>
                <p>LED Maintenance Best Practices</p>
            </div>

            <div class="insight-card">
                <span>04</span>
                <p>Fine Pixel Display Guide</p>
            </div>

            <div class="insight-card">
                <span>05</span>
                <p>Commercial LED Installation Tips</p>
            </div>

        </div>

    </div>

</section>
<style>
    .insights-section{
    position:relative;
    padding:120px 0;
    background:
        linear-gradient(
            135deg,
            #050b4d 0%,
            #081fc8 50%,
            #02052b 100%
        );
    overflow:hidden;
}

/* vertical light lines */
.insights-section::before{
    content:'';
    position:absolute;
    inset:0;
    background:
        repeating-linear-gradient(
            to right,
            rgba(255,255,255,0.04) 0px,
            rgba(255,255,255,0.04) 1px,
            transparent 1px,
            transparent 6px
        );
    opacity:.5;
}

.insights-container{
    position:relative;
    z-index:2;
    width:90%;
    max-width:1200px;
    margin:auto;
}

.insights-heading{
    max-width:500px;
    margin-bottom:60px;
}

.small-title{
    color:#dbe4ff;
    font-size:18px;
    display:block;
    margin-bottom:15px;
}

.insights-heading h2{
    color:#fff;
    font-size:42px;
    line-height:1.2;
    font-weight:600;
    margin-bottom:20px;
}

.insights-heading p{
    color:rgba(255,255,255,0.7);
    line-height:1.8;
    font-size:15px;
}

.insights-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.insight-card{
    min-height:170px;
    padding:30px;
    border-radius:14px;
    border:1px solid rgba(255,255,255,0.2);
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(10px);
    transition:0.4s ease;
}

.insight-card:hover{
    transform:translateY(-8px);
    border-color:#7ea6ff;
}

.insight-card span{
    color:#9ec3ff;
    font-size:42px;
    font-weight:300;
    display:block;
    margin-bottom:25px;
}

.insight-card p{
    color:#fff;
    font-size:18px;
    line-height:1.5;
}

/* mobile */
@media(max-width:991px){

    .insights-grid{
        grid-template-columns:1fr;
    }

    .insights-heading h2{
        font-size:32px;
    }

}
</style>