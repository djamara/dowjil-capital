@extends('layout')

@section('pages')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span><a href="/Services"><span>Services <i class="ion-ios-arrow-forward"></i></span></a> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" style="margin-bottom: 80px">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-4">
                    <img src="{{$service->images}}" width="100%">
                </div>
                <div class="col-lg-7">
                    <h3><strong>{{ucfirst($service->service_libelle)}}</strong></h3>
                    <hr style="background-color: red; height: 1px">
                    <p>
                        {!! $service->service_detail !!}
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection
