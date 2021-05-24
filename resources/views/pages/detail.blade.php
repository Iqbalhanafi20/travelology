@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
<!-- main -->
<main>
        <section class="section-details-header"></section>
            <section class="section-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        Paket Travel
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Details
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <!-- left content -->
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>Bromo</h1>
                                <p>
                                    Republik Indonesia
                                </p>
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="frontend/images/bromo1.jpg" class="xzoom" id="xzoom-default" xoriginal='frontend/images/bromo1.jpg' alt="details-image" style="width: 100%;">
                                    </div>
                                    <!-- thubmnail -->
                                    <div class="xzoom-thumbs">
                                        <a href="frontend/images/bromo1.jpg">
                                            <img src="frontend/images/bromo1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo1.jpg">
                                        </a>

                                        <a href="frontend/images/bromo2.jpg">
                                            <img src="frontend/images/bromo2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo2.jpg">
                                        </a>

                                        <a href="frontend/images/bromo3.jpg">
                                            <img src="frontend/images/bromo3.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo3.jpg">
                                        </a>

                                        <a href="frontend/images/bromo4.jpg">
                                            <img src="frontend/images/bromo4.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo4.jpg">
                                        </a>
                                    </div>
                                </div>
                                <h2>Tentang Wisata</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta enim nisi quos fugiat nemo repellat nulla facere delectus, ut quis eius odio, ratione quisquam adipisci distinctio saepe illo! Maxime?</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt excepturi nostrum optio? At voluptas laborum
                                </p>
                                <div class="features row">
                                    <div class="col-md-4">
                                        <div class="description">
                                            <img src="frontend/images/tiket.svg" alt="desc" class="features-image">
                                            <div class="description">
                                            <h3>Acara</h3>
                                            <p>Tari Kecak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="frontend/images/bahasa.svg" alt="desc" class="features-image">
                                            <div class="description">
                                            <h3>Bahasa</h3>
                                            <p>Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="frontend/images/makanan.svg" alt="desc" class="features-image">
                                            <div class="description">
                                            <h3>Makanan</h3>
                                            <p>Nasi Campur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- right content -->
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                <h2>Members are going</h2>
                                <div class="members my-2">
                                    <img src="frontend/images/member1.png" alt="member-image" class="member-images mr-1">
                                    <img src="frontend/images/member2.png" alt="member-image" class="member-images mr-1">
                                    <img src="frontend/images/member3.png" alt="member-image" class="member-images mr-1">
                                    <img src="frontend/images/member4.png" alt="member-image" class="member-images mr-1">
                                </div>
                                <hr>
                                <h2>Trip Informations</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Date of Departure</th>
                                        <td width="50%" class="text-right">
                                            22 Mar, 2021
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Duration</th>
                                        <td width="50%" class="text-right">
                                            4D, 3N
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type</th>
                                        <td width="50%" class="text-right">
                                            Open Trip
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">
                                           $80,00 / Person
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="join-container">
                                <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                                    Join Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@endsection

@push('prepend-style')
<!-- xzoom -->
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <!-- xzoom -->
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title : false,
                tint: '#333',
                zoffset: 35,
            });
        })
    </script>
@endpush