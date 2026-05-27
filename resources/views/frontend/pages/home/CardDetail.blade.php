@extends('frontend.layouts.app')

@section('title', 'CardDetail')

@section('content')

{{-- PROJECT DETAIL SECTION --}}
<section class="project-detail-section">

    <div class="project-container">

        {{-- Heading --}}
        <div class="project-heading">

            <h1>
                Shinhan Bank
            </h1>

            <p>
                Proven Project Experience across Cambodia.
                LED Media has successfully completed LED display
                installations and event production projects for
                leading organizations, banks, brands, and institutions.
            </p>

        </div>

        {{-- Project Card --}}
        <div class="project-card">

            {{-- Left Image --}}
            <div class="project-image">

                <img
                    src="{{ asset('storage/image/Shinhan.png') }}"
                    alt="Shinhan Bank"
                >

            </div>

            {{-- Right Content --}}
            <div class="project-info">

                <h2>
                    Shinhan Bank
                </h2>

                <p>
                    Outdoor LED Display
                </p>

                <span>
                    Siem Reap
                </span>

            </div>

        </div>

    </div>

</section>

@endsection


@push('styles')

<style>
/* =========================================
   PROJECT DETAIL SECTION
========================================= */

.project-detail-section{
    padding:120px 0;
    background:#02053a;
    min-height:100vh;
}

.project-container{
    width:90%;
    max-width:1300px;
    margin:auto;
}

/* =========================================
   HEADING
========================================= */

.project-heading{
    margin-bottom:50px;
}

.project-heading h1{
    color:#fff;
    font-size:52px;
    font-weight:300;
    margin-bottom:20px;
}

.project-heading p{
    color:rgba(255,255,255,0.7);
    max-width:760px;
    line-height:1.8;
    font-size:16px;
}

/* =========================================
   PROJECT CARD
========================================= */

.project-card{
    display:flex;
    align-items:stretch;
    gap:60px;

    min-height:500px;

    border:1px solid rgba(255,255,255,0.2);
    border-radius:24px;

    padding:35px;

    background:
    radial-gradient(
        circle at right center,
        rgba(0,110,255,0.45),
        transparent 35%
    ),
    linear-gradient(
        135deg,
        rgba(8,20,90,0.98),
        rgba(0,50,180,0.7)
    );

    overflow:hidden;
}

/* =========================================
   IMAGE
========================================= */

.project-image{
    width:500px;
    height:100%;
    flex-shrink:0;
}

.project-image img{
    width:100%;
    height:100%;

    min-height:430px;

    border-radius:18px;

    object-fit:cover;
    display:block;

    border:3px solid #1e90ff;

    box-shadow:
        0 0 25px rgba(0,140,255,0.45);
}

/* =========================================
   CONTENT
========================================= */

.project-info{
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.project-info h2{
    color:#fff;
    font-size:48px;
    font-weight:300;
    margin-bottom:25px;
}

.project-info p{
    color:#fff;
    font-size:20px;
    margin-bottom:14px;
}

.project-info span{
    color:rgba(255,255,255,0.75);
    font-size:18px;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:991px){

    .project-card{
        flex-direction:column;
        min-height:auto;
    }

    .project-image{
        width:100%;
    }

    .project-image img{
        min-height:320px;
    }

    .project-heading h1{
        font-size:40px;
    }

    .project-info h2{
        font-size:34px;
    }

}

@media(max-width:576px){

    .project-detail-section{
        padding:80px 0;
    }

    .project-card{
        padding:20px;
        gap:30px;
    }

    .project-image img{
        min-height:250px;
    }

    .project-heading h1{
        font-size:32px;
    }

    .project-info h2{
        font-size:28px;
    }

    .project-info p,
    .project-info span{
        font-size:16px;
    }

}
</style>

@endpush