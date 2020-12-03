@extends('layout.app')
@section('content')
    @include('parallax')
    @include('adventure')
    <div id="gallery" class="py-5">
        <div class="container text-white position-relative mt-5">
            <h3 class="title-h3 pb-3 underlined-blue">Browse Our <br>Gallery</h3>
            <p class="w-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
                vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
                tristique posuere.
            </p>


            <div class="row position-relative">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.png')}}" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-md-10 offset-md-2">
                    <div class="gallery-bloc p-5">
                            <div class="col-md-7 offset-md-5">
                                <div class="d-flex flex-column justify-content-around h-100">
                                    <div class="d-flex justify-content-between">
                                        <h3>Kamchatka <br>Solutide</h3>
                                        <h3>2019</h3>
                                    </div>
                                    <div>
                                        <h5>Photography</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis id, hic
                                            aspernatur aliquid.</p>
                                        <h5>Year</h5>
                                        <p>2019</p>
                                        <h5>Narrative</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis id, hic
                                            aspernatur aliquid.</p>
                                    </div>
                                    <div>
                                        <div class="btn btn-danger px-5 my-3">Explore Photo</div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>

            <div class="top-line"></div>
            <div class="top-category">
                <span class="red">02</span> / Browse our Gallery
            </div>
    
            <div class="left-category">
                <span class="red">02</span> / Browse our Gallery
            </div>
        </div>
    </div>
@endsection
