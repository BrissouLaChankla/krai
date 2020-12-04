<div id="adventure" class="py-5">
    <div class="container text-white position-relative mt-5">
        <h3 class="title-h3 pb-3 underlined-blue">Chose your <br>Adventure</h3>
        <p class="w-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
            >Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
            Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique
            posuere.
        </p>

        @php
        $adventuretitles = ['Camping', 'Sightseeing', 'Hiking'];
        @endphp

        <div class="row">
            @for ($i = 1; $i < 4; $i++)
                <div class="col-md-4 p-4 wow fadeInUp" data-wow-delay=".{{ $i * 3 }}s">
                    <div class="d-flex flex-column p-3 bg-secondary shadow-cust hvr-grow position-relative">
                        <div class="date">0{{ $i }}<span class="red">/03</span></div>
                        <img src='{{ asset('img/adventure/' . $i . '.png') }}' class="img-fluid" alt="">
                        <div class="px-2 text-center">
                            <h3 class="title-h3">{{ $adventuretitles[$i - 1] }}</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                                elementum
                                tristique.</p>
                            <div class="btn btn-danger px-5 my-3">Explore</div>
                        </div>
                        <div class="liseret c{{ $i }}"></div>
                    </div>
                </div>
            @endfor
        </div>



        <div class="top-line"></div>
        <div class="top-category">
            <span class="red">01</span> / Range of Activities
        </div>

        <div class="left-category">
            <span class="red">01</span> / Range of Activities
        </div>

    </div>
</div>
