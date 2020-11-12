@extends('layouts.app')

@section('title','Travelology')

@section('content')
<header>
    <div class="wrapper-jumbotron"></div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container hero-wrapper">
            <h1 class="display-4 typing-text" id="typing-text">Your Travel Experience is OUR PRIORITY</h1>
            <center>
                <p class="lead">Cheap and fun trips never imagined before</p>
                <button type="button" class="btn btn-primary get-started">Get Started</button>
            </center>
        </div>
    </div>
    </div>
</header>

<main>
    <div class="container">

        <section class="statistic">
            <center>
                <div class="statistic-wrapper">
                    <div class="row">
                        <div class="col-lg-3 stat">
                            <span class="num">50</span><br><span>Partners</span>
                        </div>
                        <div class="col-lg-3 stat">
                            <span class="num">200</span><br><span>Hotels</span>
                        </div>
                        <div class="col-lg-3 stat">
                            <span class="num">250</span><br><span>Partners</span>
                        </div>
                        <div class="col-lg-3 stat">
                            <span class="num">35</span><br><span>Countries</span>
                        </div>
                    </div>
                </div>
            </center>
        </section>

        <section class="popular-place">
            <div class="row">
                <div class="col-lg-12 col-sm-12 title-place">
                    <p class="popular-text">Popular Place</p>
                    <p class="pop-text2">Something place always makes you remember</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <!-- <div class="opacity-img"></div> -->
                    <div class="card">
                        <div class="title-places">INDONESIA<br><span>CITUMANG, PANGANDARAN</span></div>
                        <div class="imgBox">
                            <img class="card-img-top" src="assets/images/place/yulia-agnis-Sf1OpkbfDGA-unsplash.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary letsgo center-block">Let's Go</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <!-- <div class="opacity-img"></div> -->
                    <div class="card">
                        <div class="title-places">INDONESIA<br><span>DANAU TOBA, MEDAN</span></div>
                        <div class="imgBox">
                            <img class="card-img-top" src="assets/images/place/fikry-anshor-L7XEhmUxqkY-unsplash.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary letsgo center-block">Let's Go</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <!-- <div class="opacity-img"></div> -->
                    <div class="card">
                        <div class="title-places">INDONESIA<br><span>BROMO, MALANG</span></div>
                        <div class="imgBox">
                            <img class="card-img-top" src="assets/images/place/nindy-rahmadani-uktyDpxvKSg-unsplash.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                               <a href="detail.html"><button type="button" class="btn btn-primary letsgo center-block">Let's Go</button></a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <!-- <div class="opacity-img"></div> -->
                    <div class="card">
                        <div class="title-places">INDONESIA<br><span>NUSA PENIDA, BALI</span></div>
                        <div class="imgBox">
                            <img class="card-img-top" src="assets/images/place/johannes-mandle-NNJolvWMLa4-unsplash.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary letsgo center-block">Let's Go</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="network-section">
            <div class="row">
                <div class="col-md-6">
                    <div class="row" data-aos="fade-right">
                        <div class="col-md-12">
                            <p class="additional-title">Additional Package</p>
                            <div class="row wrapper-item">
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/ar-camera.png" alt="camera">
                                </div>
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/food.png" alt="food">
                                </div>
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/free-wifi.png" alt="wifi">
                                </div>
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/passport.png" alt="passport">
                                </div>
                            </div>
                            <div class="row wrapper-item">
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/travel.png" alt="travel">
                                </div>
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/tour.png" alt="tour">
                                </div>
                                <div class="col-md-2 col-3 item-package">
                                    <img src="assets/images/logo-additional/snack.png" alt="snack">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" data-aos="fade-left">
                        <div class="col-md-12">
                            <p class="additional-title">Our Network</p>
                            <div class="row">
                                <div class="col-md-4 col-xs-3 logo-partner">
                                    <img src="assets/images/logo-partner/ana.png" alt="">
                                </div>
                                <div class="col-md-4 col-xs-3 logo-partner">
                                    <img src="assets/images/logo-partner/disney.png" alt="">
                                </div>
                                <div class="col-md-4 col-xs-3 logo-partner">
                                    <img src="assets/images/logo-partner/visa.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="testimoni-text">OUR TESTIMONI</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card text-center" data-aos="zoom-in">
                            <div class="card-body">
                                <center>
                                    <div class="image-profile" alt="">
                                        <img src="assets/images/foto/IMG_0348.JPG" alt="">
                                    </div>
                                </center>
                                <h5 class="card-title">Iqbal Hanafi</h5>
                                <p class="card-text">" Saya sangat senang sekali
                                    bisa ikut trip bareng
                                    tim travelology, sangat
                                    menyenangkan "</p>
                            </div>
                            <div class="card-footer text-muted">
                                CITUMANG, PANGANDARAN
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card text-center" data-aos="zoom-in">
                            <div class="card-body">
                                <center>
                                    <div class="image-profile">
                                        <img src="assets/images/foto/IMG_0342.JPG" alt="">
                                    </div>
                                </center>
                                <h5 class="card-title">Siti Wahyuni</h5>
                                <p class="card-text">" Gak salah pilih Travelology,
                                    Staffnya berpengalaman
                                    dan sangat membantu "</p>
                            </div>
                            <div class="card-footer text-muted">
                                ORCHID FOREST, BANDUNG
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card text-center" data-aos="zoom-in">
                            <div class="card-body">
                                <center>
                                    <div class="image-profile">
                                        <img src="assets/images/foto/IMG_0494.JPG" alt="">
                                    </div>
                                </center>
                                <h5 class="card-title">Nuzul Abunizar</h5>
                                <p class="card-text">" Ingin jalan - jalan lagi
                                    sama om dari travelology
                                    lagi :) "</p>
                            </div>
                            <div class="card-footer text-muted">
                                UMBUL PONGGOK, KLATEN
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary getstart">Get Started</a>
                            <a href="#" class="btn btn-primary needhelp">Need Help</a>
                        </div>
                    </div>
                </center>
            </div>
</main>
@endsection()