@extends('layout')

@section('pages')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contactez nous</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="#">Accueil<i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Adresse:</span>
                            Cocody Riviera Palmeraie carrefour GUIRAUD</p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Telephone:</span> <a href="tel://">+225 23498101</a> <br>
                                <a href="tel://">+225 59067594</a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a href="mail://infos@dowjilcapital.com">infos@dowjilcapital.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">
                        Si vous avez des questions
                       <br> n'hésitez pas à nous envoyer un message </h2>
                    <form action="#" class="bg-light p-5 contact-form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" placeholder="Votre Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Votre Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="sujet" class="form-control" placeholder="Sujet" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30"  rows="7" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-5">Envoyer Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!--

     <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>

     -->

@endsection
