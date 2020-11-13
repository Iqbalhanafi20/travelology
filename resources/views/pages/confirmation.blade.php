@extends('layouts.content')
@section('title','Travelology Confirmation')
@section('content')
<link rel="stylesheet" href="{{ url('assets/styles/confirmation.css') }}">
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
                        <h6>Confirmation for #317203434</h6>
                        <p>Trip to Ubud, Bali, Indonesia for 2 Persons</p>
                        <div class="box-img">
                            <center>
                            <svg viewBox="0 0 16 16" class="bi bi-cloud-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                                <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                              </svg>
                              <p>Upload your receipt payment here !</p>
                              <button type="button" class="btn btn-success" style="background-color: #76B840; !important;">Submit</button>
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
@endsection()