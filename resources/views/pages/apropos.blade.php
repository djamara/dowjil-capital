@extends('layout')

@section('pages')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">A propos de nous</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos de nous <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about align-items-stretch">
                    <div class="wrap-about-border">
                        <div class="img" style="background-image: url({{$inspiration->image}}); border"></div>
                        <div class="text">
                            <h3>{{$inspiration->inspirationTitre}}</h3>
                            <p>{{$inspiration->inspirationDescription}}</p>
                            <p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">{{$motivation->AboutTitre}}</h2>
                    <p>{!! $motivation->AboutContenu !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center" style="background-image: url({{asset('frontend/images/about.jpg')}});">
                        <div class="video justify-content-center">
                            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4">{{$motivation->AboutTitreMotivation}}</h2>
                    <p>{!! $motivation->aboutMotivation !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="height: 350px;background-image: url({{asset('frontend/images/bg_3.jpg')}});">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">Nos présentons toujours les meilleurs performances</h2>
                </div>
            </div>
        </div>
    </section>

@endsection
