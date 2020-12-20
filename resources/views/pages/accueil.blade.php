@extends('layout')

@section('pages')
    <section class="home-slider owl-carousel">
        @foreach($slides as $slide)
        <div class="slider-item" style="background-image:url({{$slide->images}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate">
                        <span class="subheading">{{$slide->titre}}</span>
                        <h1 class="mb-4">{{$slide->description}}</h1>
                        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Nos services</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      {{--  <div class="slider-item" style="background-image:url({{asset('frontend/images/bg_2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate">
                        <span class="subheading">Ajourd'hui le talent, Demain le succès</span>
                        <h1 class="mb-4">Nous vous aidons à accroitres votre Business</h1>
                        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Nos services</a></p>
                    </div>
                </div>
            </div>
        </div>--}}
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about align-items-stretch">
                    <div class="wrap-about-border ftco-animate">
                        <div class="img" style="background-image: url({{$inspiration->image}}); border"></div>
                        <div class="text">
                            <h3>{{$inspiration->inspirationTitre}}</h3>
                            <p>
                                {{$inspiration->inspirationDescription}}
                            </p>
                            <p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Nos principales spécialités</h2>
                    <p>{{$presentation->presentationIntroduction}}.</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            @for($i = 0; $i < sizeof($specialites); $i = $i+2)
                            <div class="services active text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
                                <div class="text media-body">
                                    <h3>{{$specialites[$i]['specialitesTitre']}}</h3>
                                    <p>{{$specialites[$i]['specialitesDescription']}}</p>
                                </div>
                            </div>
                            @endfor
                            {{--<div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>Risk Analysis</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>--}}
                        </div>
                        <div class="col-lg-6">
                            @for($i = 1 ; $i < sizeof($specialites); $i = $i+2)
                            <div class="services active text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>{{$specialites[$i]['specialitesTitre']}}</h3>
                                    <p>{{$specialites[$i]['specialitesDescription']}}</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="height: 350px; background-image: url({{asset('frontend/images/bg_3.jpg')}});">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">Nos présentons toujours les meilleurs performances</h2>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Nos principaux services</h2>
                    <p>{!! $introduction->introductionDescription !!}</p>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach($service as $service)
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                        <div class="text media-body">
                            <a href="Services/{{$service->service_id}}">
                                <h3>{{$service->service_libelle}}</h3>
                                <p>{{$service->service_description}}</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--<section class="ftco-intro ftco-no-pb img" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
                </div>
                <div class="col-lg-3 col-md-4 ftco-animate">
                    <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
                </div>
            </div>
        </div>
    </section>--}}

    {{--<section class="ftco-section ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Recent Projects</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    <p></p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-2.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-1.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-3.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-4.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-5.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-6.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-7.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/project-8.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('frontend/images/bg_5.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <h2 class="mb-4">Request A Quote</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <form action="#" class="appointment-form ftco-animate">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Guidance</option>
                                                <option value="">Finance</option>
                                                <option value="">Business</option>
                                                <option value="">Auto Loan</option>
                                                <option value="">Real Estate</option>
                                                <option value="">Other Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Clients Says</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach($clients as $client)
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{asset('frontend/images/client.png')}})">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                    <p>{!! $client->commentaire !!}</p>
                                    <p class="name">{{$client->NomPrenomClient}}</p>
                                    <span class="position">{{$client->fonctionClient}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


