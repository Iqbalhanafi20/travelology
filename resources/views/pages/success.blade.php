@extends('layouts.content')
@section('title','Success')
@section('content')
<link rel="stylesheet" href="{{ url('assets/styles/success.css') }}">
<div class="box-head-gradient">
        <div class="container">
           <!-- breadcrumd start -->
           <section class="breadcrumb-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box">
                            <nav aria-label="breadcrumb" class="bread">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Travel Package</a></li>
                                <li class="breadcrumb-item"><a href="detail.html">Detail</a></li>
                                <li class="breadcrumb-item"><a href="checkout.html">Checkout</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- contirmationbox -->
            <div class="container con">
                <div class="col-md-1"></div>
                <div class="col-md-10 col-12">
                    <div class="confirmation-box">
                        <div class="box-img">
                            <center>
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 367.805 367.805" style="enable-background:new 0 0 367.805 367.805;" xml:space="preserve">
	<path style="fill:#3BB54A;" d="M183.903,0.001c101.566,0,183.902,82.336,183.902,183.902s-82.336,183.902-183.902,183.902
		S0.001,285.469,0.001,183.903l0,0C-0.288,82.625,81.579,0.29,182.856,0.001C183.205,0,183.554,0,183.903,0.001z"/>
	<polygon style="fill:#D4E1F4;" points="285.78,133.225 155.168,263.837 82.025,191.217 111.805,161.96 155.168,204.801 
		256.001,103.968 	"/>
                              
                              <h4 style="margin-top:20px;margin-bottom:20px">YOUR PAYMENT HAVE BEEN SUCCESS</h4>
                              <p>Your status payment will change after our admin confirm your payment <br> We've sent you email for trip instruction, please readit as well</p>
                              <a href="/" class="btn btn-success" style="background-color: #76B840 !important;color:white !important;">Back to Home</a>
                            </center>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!-- confirmationbox end -->
        </div>

        <!-- footer -->
        <div class="footer" style="position: fixed;bottom: 0;width: 100%;">
            <div class="container">
                <p>Travelology Copyrights 2020, All right Reserved, Made with love from Jakarta</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
@endsection();