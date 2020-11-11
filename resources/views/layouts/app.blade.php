<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/libraries/bootstrap/css/bootstrap.css') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('assets/styles/main.css') }}">
    <!-- AOS Effect -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">Travelology</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.html">Home</a>
                    <a class="nav-item nav-link" href="#">Travel Packages</a>

                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Passpord</a>
                            <a class="dropdown-item" href="#">VISA</a>
                            <a class="dropdown-item" href="#">Imigration</a>
                        </div>
                    </div>

                    <a class="nav-item nav-link" href="#">Testimoni</a>
                    <a class="nav-item nav-link btn tombol" href="login.html">Log In</a>
                </div>
            </div>
        </div>
    </nav>

    </div>

    @yield('content')

<footer>
    <section class="testimoni">
        <div class="box-effect">
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

            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>HEAD OFFICE</h6>
                                    <p>PT Travelology Nusantara Semesta <br>
                                        Jl Yos Sudarso Kav 20-23 <br>
                                        Kota Jakarta Utara 14230, Indonesia</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h6>CUSTOMER SERVICE</h6>
                                    <p>Fax : 021-4365506 <br>
                                        Tlp : 021-4359906 <br>
                                        Email : cs@travelology.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>FOLLOW US</h6>
                                    <p>Facebook <br>
                                        Instagram <br>
                                        Twitter <br>
                                        Google+</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h6>ACCOUNT</h6>
                                    <p>Fax : 021-4365506 <br>
                                        Tlp : 021-4359906 <br>
                                        Email : cs@travelology.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>COMPANY</h6>
                                    <p>Career <br>
                                        Media</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="footer">
                <div class="container">
                    <p>Travelology Copyrights 2020, All right Reserved, Made with love from Jakarta</p>
                </div>
            </div>

        </div>

    </section>
</footer>


    <!-- Jquery -->
    <script src="{{ url('assets/libraries/jquery/jquery.js') }}"></script>
    <!-- counterUp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!-- AOS Effect -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JS -->
    <script src="{{ url('assets/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/scripts/main.js') }}"></script>

</body>

</html>