@extends('layouts.app')

@section('title')
Travelology - Travel kita semua
@endsection

@section('content')
 <!-- header -->
 <header class="text-center">
        <h1>
            Discover world with us 
            <br>
            "Travelology"
        </h1>
        <p class="mt-3">
            You will see beautiful place
            <br>
            you never seen before
        </p>
        <a href="" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <!-- section -->
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Negara</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partner</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Popular</h2>
                        <p>
                        Something new place 
                        <br>
                        around the world like heaven
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('frontend/images/popular1.jpg')" class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                DANAU TOBA, MEDAN
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('frontend/images/popular2.jpg')" class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                CITUMANG, PANGANDARAN
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('frontend/images/popular3.jpg')" class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                NUSA PENINDA, BALI
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('frontend/images/popular4.jpg')" class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                BROMO, MALANG
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="section-network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>Jaringan yang luas <br>
                        membuat aman dan nyaman
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                       
                                <img src="frontend/images/partner.jpg" alt="logo" class="img-partner">
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                        Moments were giving them 
                        <br>
                        the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/jokowi.jpg" style="width:100px;height:100px;" alt="testimonial-foto" class="md-4 rounded-circle">
                                <h3 class="mb-4">Joko Widodo</h3>
                                <p class="testimonial">
                                    Jangan Kerja Kerja Kerja, tapi Liburan Liburan Liburan
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Citumang
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/uno.jpg" style="width:100px;height:100px;" alt="testimonial-foto" class="md-4 rounded-circle">
                                <h3 class="mb-4">Sandiaga Uno</h3>
                                <p class="testimonial">
                                    Sebagai mentri Manparekraf saya sangat senang ada open trip yang sebagus dan sangat baik seperti travelology
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bromo
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/hazard.jpg" style="width:100px;height:100px;" alt="testimonial-foto" class="md-4 rounded-circle">
                                <h3 class="mb-4">Eden Hazard</h3>
                                <p class="testimonial">
                                    i never come to Indonesia but because this trip i imagine, i can come twice to Indonesia
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Toba
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a  href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection