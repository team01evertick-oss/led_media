@if(isset($solution))

<section class="why-led-section">

    <div class="container">

        <div class="why-led-grid">

            <!-- BENEFITS -->
            <div class="why-led-benefits">

                <h2>Benefits</h2>

                <ul>
                    @forelse($solution->benefits as $benefit)
                        <li>{{ $benefit->title }}</li>
                    @empty
                        <li>No benefits listed.</li>
                    @endforelse
                </ul>

            </div>

            <!-- USES -->
            <div class="why-led-uses">

                <h2>Where It Is Used</h2>

                <ul>
                    @forelse($solution->uses as $use)
                        <li>{{ $use->title }}</li>
                    @empty
                        <li>No uses listed.</li>
                    @endforelse
                </ul>

            </div>

        </div>

    </div>

</section>

@endif

<style>
.led-usage-benefits {
    width: 100%;
    background: linear-gradient(135deg, #001b6b, #02002f);
    color: #fff;
    overflow: hidden;
    font-family: Arial, sans-serif;
}

/* COMMON */
.led-container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.led-usage-grid,
.led-benefits-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 60px;
    padding: 80px 0;
}

.led-usage-content h2,
.led-benefits-content h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 30px;
    color: #fff;
}

.led-usage-content ul,
.led-benefits-content ul {
    padding-left: 20px;
}

.led-usage-content ul li,
.led-benefits-content ul li {
    margin-bottom: 14px;
    font-size: 18px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
}

/* IMAGE CARD */
.led-usage-image-card,
.led-benefits-image-card {
    position: relative;
}

.led-usage-image-card img,
.led-benefits-image-card img {
    width: 100%;
    border-radius: 22px;
    display: block;
    object-fit: cover;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
}

/* OPTIONAL LIGHT BOX EFFECT */
.led-usage-image-card::before,
.led-benefits-image-card::before {
    content: "";
    position: absolute;
    inset: -10px;
    background: rgba(120, 170, 255, 0.12);
    border-radius: 28px;
    z-index: -1;
    filter: blur(12px);
}

/* SEPARATION BETWEEN TOP & BOTTOM */
.led-benefits-row {
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .led-usage-grid,
    .led-benefits-grid {
        grid-template-columns: 1fr;
        gap: 40px;
        padding: 60px 0;
    }

    .led-benefits-grid {
        display: flex;
        flex-direction: column-reverse;
    }

    .led-usage-content h2,
    .led-benefits-content h2 {
        font-size: 34px;
    }

    .led-usage-content ul li,
    .led-benefits-content ul li {
        font-size: 16px;
    }
}

@media (max-width: 576px) {
    .led-usage-content h2,
    .led-benefits-content h2 {
        font-size: 28px;
    }

    .led-usage-grid,
    .led-benefits-grid {
        padding: 50px 0;
    }
}
</style>