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
                <div id="carouselExampleIndicators" class="carousel slide wow fadeInRight" data-ride="carousel">
                    <div data-slide="prev" href="#carouselExampleIndicators" class="left-nav d-flex align-items-center justify-content-center wow fadeInRight" data-wow-delay=".3s">
                        <i class="fas fa-caret-left"></i>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.webp')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.webp')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset ('img/gallery/1.webp')}}" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-2">
                    <div class="gallery-bloc py-5">
                            <div class="col-md-8 offset-md-4">
                                <div class="d-flex flex-column justify-content-around h-100">
                                    <div class="title d-flex justify-content-between py-3 px-5 ml-6">
                                        <h3 class="m-0">Kamchatka <br>Solutide</h3>
                                        <h3 class="m-0">2019</h3>
                                    </div>
                                    <div class="px-5 ml-6 mt-4">
                                        <h5>Photography</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis id, hic
                                            aspernatur aliquid.</p>
                                        <h5>Year</h5>
                                        <p>2019</p>
                                        <h5>Narrative</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis id, hic
                                            aspernatur aliquid.</p>
                                    </div>
                                    <div class="px-5 ml-6">
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
