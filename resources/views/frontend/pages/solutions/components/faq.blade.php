@if(isset($solution) && $solution->faqs->isNotEmpty())

<section class="faq-section">

    <div class="container">

        <!-- TITLE -->
        <div class="faq-title">
            <h2>FAQ</h2>
        </div>

        <!-- FAQ LIST -->
        <div class="faq-list">

            @foreach($solution->faqs as $faq)

            <div class="faq-item">

                <!-- QUESTION -->
                <button class="faq-question">

                    <span>{{ $faq->question }}</span>

                    <img
                        src="{{ asset('storage/icon/Polygon2.png') }}"
                        alt="Arrow Icon"
                        class="faq-arrow-icon">

                </button>

                <!-- ANSWER -->
                <div class="faq-answer">
                    <p>{{ $faq->answer }}</p>
                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endif

<style>

/* SECTION */

.faq-section{
    width:100%;
    padding:100px 0;
    background:#fff;
}

/* TITLE */

.faq-title{
    margin-bottom:40px;
}

.faq-title h2{
    font-size:40px;
    font-weight:300;
    color:#000;
}

/* FAQ LIST */

.faq-list{
    display:flex;
    flex-direction:column;
    gap:22px;
}

/* FAQ ITEM */

.faq-item{
    width:100%;
    max-width:900px;
}

/* QUESTION BUTTON */

.faq-question{
    width:100%;
    background:linear-gradient(
        90deg,
        #f4f4f4 0%,
        #ffffff 45%,
        #f3f3f3 100%
    );
    border:1px solid #d9d9d9;
    border-radius:14px;
    padding:20px 28px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    cursor:pointer;
    transition:0.3s ease;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

.faq-question:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
}

/* QUESTION TEXT */

.faq-question span{
    font-size:18px;
    color:#111;
    font-weight:500;
    text-align:left;
}

/* ICON */

.faq-arrow-icon{
    width:18px;
    height:18px;
    object-fit:contain;
    transition:0.3s ease;
}

/* ANSWER */

.faq-answer{
    display:none;
    padding:20px 25px;
    background:#fff;
    border:1px solid #d9d9d9;
    border-top:none;
    border-radius:0 0 14px 14px;
}

.faq-answer p{
    font-size:16px;
    line-height:1.7;
    color:#444;
}

/* ACTIVE */

.faq-item.active .faq-answer{
    display:block;
}

.faq-item.active .faq-arrow-icon{
    transform:rotate(180deg);
}

/* RESPONSIVE */

@media(max-width:768px){

    .faq-section{
        padding:70px 0;
    }

    .faq-title h2{
        font-size:32px;
    }

    .faq-question{
        padding:16px 20px;
    }

    .faq-question span{
        font-size:15px;
        line-height:1.5;
    }

    .faq-answer{
        padding:16px 18px;
    }

    .faq-answer p{
        font-size:14px;
    }

}

</style>

<script>

document.querySelectorAll('.faq-question').forEach(button => {

    button.addEventListener('click', () => {

        const faqItem = button.parentElement;

        faqItem.classList.toggle('active');

    });

});

</script>