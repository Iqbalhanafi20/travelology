<!-- navbar -->
<div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="/" class="navbar-brand">
                <h3 alt="travelku"><span style="color: #1ABC9C;">Travel</span><span style="color:salmon">Ology</span></h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">link</a>
                            <a href="#" class="dropdown-item">link</a>
                            <a href="#" class="dropdown-item">link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>

                    <!-- mobile version -->
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('/admin') }}">
                        <button class="btn btn-login my-2 my-sm-0">
                            Masuk
                        </button>
                    </form>
                    
                    <!-- dekstop version -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('/admin') }}">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                            Masuk
                        </button>
                    </form>
                    
                </ul>
            </div>
        </nav>

    </div>