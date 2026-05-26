@extends('frontend.layouts.app')

@section('title', $solution->title)

@section('content')

    {{-- HERO SECTION --}}
    @include(
        'frontend.layouts.hero',
        ['solution' => $solution]
    )

    {{-- ABOUT SECTION --}}
    @include(
        'frontend.pages.home.about',
        ['solution' => $solution]
    )

    <!-- =========================================================
         WHERE IT IS USED
    ========================================================= -->
    <section class="meeting-display-section">

        <div class="meeting-display-container">

            <!-- TOP -->
            <div class="meeting-display-grid">

                <!-- LEFT -->
                <div class="meeting-display-content">

                    <h2>
                        Where It Is Used
                    </h2>

                    <ul>

                        @forelse($solution->uses as $use)

                            <li>
                                {{ $use->title }}
                            </li>

                        @empty

                            <li>
                                No uses listed.
                            </li>

                        @endforelse

                    </ul>

                </div>

                <!-- RIGHT -->
                <div class="meeting-display-box-wrapper">

                    @foreach($solution->technicalFeatures->chunk(3) as $row)

                        <div class="meeting-display-row">

                            @foreach($row as $feature)

                                <div class="meeting-display-box">

                                    <span>
                                        {{ $feature->feature_number }}
                                    </span>

                                    <h4>
                                        {{ $feature->title }}
                                    </h4>

                                </div>

                            @endforeach

                        </div>

                    @endforeach

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="meeting-benefit-grid">

                <!-- IMAGE -->
                <div class="meeting-benefit-image">

                    <img
                        src="{{ asset('images/usage.jpg') }}"
                        alt="Benefits">

                </div>

                <!-- BENEFITS -->
                <div class="meeting-benefit-content">

                    <h2>
                        Benefits
                    </h2>

                    <ul>

                        @forelse($solution->benefits as $benefit)

                            <li>
                                {{ $benefit->title }}
                            </li>

                        @empty

                            <li>
                                No benefits listed.
                            </li>

                        @endforelse

                    </ul>

                </div>

            </div>

        </div>

    </section>

    {{-- WHY LED --}}
    @include(
        'frontend.pages.solutions.components.why-led',
        ['solution' => $solution]
    )

    {{-- TECHNICAL FEATURES --}}
    @include(
        'frontend.pages.solutions.components.technical-features',
        ['solution' => $solution]
    )

    {{-- FEATURED PROJECTS --}}
    @include(
        'frontend.pages.solutions.components.featured',
        ['solution' => $solution]
    )

    {{-- FAQ --}}
    @include(
        'frontend.pages.solutions.components.faq',
        ['solution' => $solution]
    )

    {{-- PARTNER --}}
    @include(
        'frontend.pages.solutions.components.partner',
        ['solution' => $solution]
    )

@endsection


<style>

.meeting-display-section{
    width:100%;
    background:linear-gradient(90deg,#0a3ca7 0%, #02004d 100%);
    font-family:Arial,sans-serif;
    overflow:hidden;
}

/* CONTAINER */

.meeting-display-container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

/* =========================
   TOP SECTION
========================= */

.meeting-display-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:80px;
    padding:80px 0;
}

/* LEFT */

.meeting-display-content h2{
    font-size:42px;
    color:#fff;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-display-content ul{
    padding-left:18px;
}

.meeting-display-content ul li{
    color:#fff;
    font-size:18px;
    line-height:2;
}

/* RIGHT */

.meeting-display-box-wrapper{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.meeting-display-row{
    display:flex;
    gap:18px;
    justify-content:center;
}

.meeting-display-box{
    width:120px;
    height:120px;
    background:#88A7D4;
    border-radius:10px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:10px;
}

.meeting-display-box span{
    color:#fff;
    font-size:24px;
    font-weight:700;
    margin-bottom:6px;
}

.meeting-display-box h4{
    color:#fff;
    font-size:14px;
    line-height:1.4;
    margin:0;
}

/* =========================
   BOTTOM SECTION
========================= */

.meeting-benefit-grid{
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:70px;
    align-items:center;
    background:#000;
    padding:70px 40px;
}

.meeting-benefit-image img{
    width:100%;
    height:260px;
    object-fit:cover;
    border-radius:10px;
}

/* BENEFITS */

.meeting-benefit-content h2{
    color:#fff;
    font-size:42px;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-benefit-content ul{
    padding-left:18px;
}

.meeting-benefit-content ul li{
    color:#fff;
    font-size:18px;
    line-height:2;
}

/* =========================
   RESPONSIVE
========================= */

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

    .meeting-display-box-wrapper{
        align-items:center;
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

    .meeting-display-row{
        gap:10px;
    }

    .meeting-display-box{
        width:80px;
        height:80px;
    }

    .meeting-display-box span{
        font-size:18px;
    }

    .meeting-display-box h4{
        font-size:11px;
    }

    .meeting-benefit-image img{
        height:180px;
    }

}

</style>