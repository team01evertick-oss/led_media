@extends('frontend.layouts.app')

@section('title', 'CardDetail')

@section('content')

    {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')

    {{-- PROJECT DETAIL SECTION --}}
    <section class="project-detail-section">

        <div class="project-container">

            {{-- Heading --}}
            <div class="project-heading">

                <h1>Shinhan Bank</h1>

                <p>
                    Proven Project Experience across Cambodia
                    LED Media has successfully completed LED display
                    installations and event production projects for
                    leading organizations, banks, brands, and institutions.
                </p>

            </div>

            {{-- Project Card --}}
            <div class="project-card">

                {{-- Left Image --}}
                <div class="project-image">
                    <img src="{{ asset('frontend/images/shinhan-bank.jpg') }}"
                         alt="Shinhan Bank">
                </div>

                {{-- Right Content --}}
                <div class="project-info">

                    <h2>Shinhan Bank</h2>

                    <p>Outdoor LED Display</p>

                    <span>Siem Reap</span>

                </div>

            </div>

        </div>

    </section>

@endsection
<style>
    .project-detail-section{
    padding:120px 0;
    background:#02053a;
    min-height:100vh;
}

.project-container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.project-heading h1{
    color:#fff;
    font-size:52px;
    font-weight:300;
    margin-bottom:20px;
}

.project-heading p{
    color:rgba(255,255,255,0.7);
    max-width:700px;
    line-height:1.8;
    margin-bottom:50px;
}

.project-card{
    display:flex;
    align-items:center;
    gap:50px;
    border:1px solid rgba(255,255,255,0.2);
    border-radius:20px;
    padding:30px;
    background:linear-gradient(
        135deg,
        rgba(8,20,90,0.95),
        rgba(0,50,180,0.65)
    );
}

.project-image{
    width:420px;
    flex-shrink:0;
}

.project-image img{
    width:100%;
    border-radius:12px;
    object-fit:cover;
}

.project-info h2{
    color:#fff;
    font-size:42px;
    font-weight:300;
    margin-bottom:20px;
}

.project-info p{
    color:#fff;
    font-size:18px;
    margin-bottom:10px;
}

.project-info span{
    color:rgba(255,255,255,0.7);
    font-size:16px;
}

@media(max-width:991px){

    .project-card{
        flex-direction:column;
    }

    .project-image{
        width:100%;
    }

    .project-heading h1{
        font-size:40px;
    }

    .project-info h2{
        font-size:32px;
    }

}
</style>