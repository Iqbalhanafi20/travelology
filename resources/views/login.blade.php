<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/styles/login.css">
</head>
<body>
    <div class="box-head-gradient">
        <div class="container">
            <!-- navbar -->
            <section class="navbar-section">
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
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
        
                            <a class="nav-item nav-link" href="#">Testimoni</a>
                            <a class="nav-item nav-link btn tombol" href="#">Log In</a>
                        </div>
                    </div>
                </div>
            </nav>
            </section>
            <!-- end navbar -->
            <!-- login -->
            <section class="login-section">
                <div class="row">
                    <div class="login-box">
                        <div class="box-icon">
                            <div class="icon-people">
                                <img src="assets/images/logo/speaking.png" alt="">
                            </div>
                            <p>LOG IN</p>
                        </div>

                        <div class="box-textbox">
                            <form>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group form-check float-left">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remembered Me</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <a href="" class="forgot-password float-right">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <a href="/checkout"><button type="button" class="btn btn-primary btn-lg btn-block login-btn">Log In</button></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="signup">Don't have account? <a href="">Sign up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end login -->
        </div>

        <!-- info -->
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

        <!-- end info -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <p>Travelology Copyrights 2020, All right Reserved, Made with love from Jakarta</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
    

        <!-- Jquery -->
        <script src="assets/libraries/jquery/jquery.js"></script>
        <!-- counterUp -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
        <!-- JS -->
        <script src="assets/libraries/bootstrap/js/bootstrap.js"></script>
        <script src="assets/scripts/main.js"></script>

</body>
</html>