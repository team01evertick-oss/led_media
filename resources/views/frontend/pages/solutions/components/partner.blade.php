<!-- =========================================================
     PARTNER SECTION
========================================================= -->

<section class="partner-section">

    <!-- BACKGROUND IMAGE -->
    <div class="partner-bg">

        <img
            src="{{ asset('storage/image/partner.png') }}"
            alt="Partner Background">

    </div>

    <!-- OVERLAY -->
    <div class="partner-overlay"></div>

    <!-- CONTENT -->
    <div class="partner-container">

        <div class="partner-content">

            <h2>

                @if(isset($solution))

                    @php
                        $partner = \App\Models\Partner::where('solution_id', $solution->id)
                            ->where('status', true)
                            ->first();
                    @endphp

                    {{ $partner->title ?? 'Create a modern and impactful meeting environment with fine pixel LED technology.' }}

                @else

                    Create a modern and impactful meeting
                    environment with fine pixel LED technology.

                @endif

            </h2>

            <!-- BUTTONS -->
            <div class="partner-buttons">

                <a
                    href="{{ route('contact') }}"
                    class="partner-btn primary-btn">

                    Request Consultation

                </a>

                <a
                    href="{{ route('contact') }}"
                    class="partner-btn secondary-btn">

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
    position:relative;
    width:100%;
    min-height:520px;
    overflow:hidden;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family:Arial,sans-serif;
    margin:0;
    padding:0;
}

/* BACKGROUND */

.partner-bg{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
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
        rgba(0,0,0,0.35) 45%,
        rgba(0,70,170,0.45) 100%
    );
    z-index:2;
}

/* CONTAINER */

.partner-container{
    position:relative;
    z-index:3;
    width:100%;
    max-width:1400px;
    margin:auto;
    padding:0 20px;
}

/* CONTENT */

.partner-content{
    max-width:900px;
    margin:auto;
    text-align:center;
}

/* TITLE */

.partner-content h2{
    color:#fff;
    font-size:72px;
    font-weight:300;
    line-height:1.1;
    margin-bottom:40px;
    letter-spacing:-2px;
}

/* BUTTON GROUP */

.partner-buttons{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:wrap;
}

/* BUTTON */

.partner-btn{
    height:58px;
    min-width:210px;
    padding:0 34px;
    border-radius:999px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    font-size:16px;
    font-weight:500;
    transition:all 0.3s ease;
}

/* PRIMARY */

.primary-btn{
    background:linear-gradient(
        90deg,
        #1760ff 0%,
        #0a84ff 100%
    );
    color:#fff;
    border:none;
    box-shadow:0 10px 24px rgba(0,102,255,0.35);
}

.primary-btn:hover{
    transform:translateY(-3px);
}

/* SECONDARY */

.secondary-btn{
    background:rgba(0,0,0,0.45);
    border:1px solid rgba(255,255,255,0.12);
    color:#fff;
    backdrop-filter:blur(4px);
}

.secondary-btn:hover{
    background:rgba(255,255,255,0.08);
    transform:translateY(-3px);
}

/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    .partner-section{
        min-height:420px;
        padding:80px 0;
    }

    .partner-content h2{
        font-size:50px;
        line-height:1.2;
        letter-spacing:-1px;
    }

}

/* =========================================================
   MOBILE
========================================================= */

@media(max-width:576px){

    .partner-section{
        min-height:auto;
        padding:70px 0;
    }

    .partner-content h2{
        font-size:34px;
        line-height:1.3;
        margin-bottom:28px;
        letter-spacing:0;
    }

    .partner-buttons{
        flex-direction:column;
        gap:14px;
    }

    .partner-btn{
        width:100%;
        max-width:260px;
        height:50px;
        font-size:14px;
    }

}
</style>