@extends('layouts.content')
@section('title','Checkout Travel')

@section('content')
<link rel="stylesheet" href="{{ url('assets/styles/checkout.css') }}">
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
                                <li class="breadcrumb-item active" aria-current="page">Chekout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- checkout start -->
            <section class="checkout">
                <div class="row">
                    <div class="col-md-8">
                        <div class="left-checkout">
                            <p class="title">Who's Going?</p>
                            <p class="detail-title">Trip to Ubud, Bali, Indonesia</p>
                            <div class="row box-table">
                                <div class="col-md-12" style="overflow-x: auto;">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col">Picture</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">Visa</th>
                                            <th scope="col">Passport</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">
                                                <div class="people-wrapper">
                                                    <img src="assets/images/foto/IMG_0348.JPG" alt="">
                                                </div>
                                            </th>
                                            <td>Iqbal Hanafi</td>
                                            <td>Indonesia</td>
                                            <td>10 Days</td>
                                            <td>Active</td>
                                            <td><img src="assets/images/icon/criss-cross.png" alt=""></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">
                                                <div class="people-wrapper">
                                                    <img src="assets/images/foto/IMG_0342.JPG" alt="">
                                                </div>
                                            </th>
                                            <td>Siti Wahyuni</td>
                                            <td>Indonesia</td>
                                            <td>10 Days</td>
                                            <td>Active</td>
                                            <td><img src="assets/images/icon/criss-cross.png" alt=""></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>

                            <p class="titlenya" style="font-weight: 600;">Add Member</p>
                                <form>
                                    <div class="row">
                                      <div class="col-md-3 col-sm-12">
                                        <input class="form-control" type="text" placeholder="Username">
                                      </div>
                                      <div class="col-md-3 col-sm-12">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>VISA</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                      </div>
                                      <div class="col-md-3 col-sm-12">
                                        <input class="form-control" type="text" placeholder="DOE Passport">
                                      </div>
                                      <div class="col-md-3 col-sm-12">
                                        <button type="button" class="btn btn-success" style="background-color: #76B840; !important;">Add Now</button>
                                      </div>
                                    </div>
                                </form> 
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger" role="alert">
                                            <h5>Note</h5>
                                            <p>You can only add members who are already registered with travelology</p>
                                        </div>
                                    </div>
                                </div> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right-checkout">
                            <p class="title-information">Information</p>
                            <table class="info-detail">
                                <tr>
                                    <td>Members</td>
                                    <td class="float-right">2 Persons</td>
                                </tr>
                                <tr>
                                    <td>Additional Visa</td>
                                    <td class="float-right">Rp 4.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td class="float-right">Rp 1.750.000,00 / Person</td>
                                </tr>
                                <tr>
                                    <td>Total Price</td>
                                    <td class="float-right">Rp 8.000.000,00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Pay (Unique Code)</strong></td>
                                    <td class="float-right">Rp 8.000.033,00</td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr style="width: 80%;align-items: center;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Payments</p>
                                    <p style="color: red;line-height: 1;font-size: 14px;">Please complete the payments before you continue the trip</p>
                                </div>
                            </div>
                            <table class="info-bank">
                                <tr>
                                    <td>
                                        <img src="assets/images/logo/cimb.png" alt="CIMB">
                                    </td>
                                    <td class="float-right">
                                        <p>PT Travel kencana semesta <br>Bank CIMB <br>317.203.2190</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img style="width: 100px;height: 40px;" src="assets/images/logo/BCA.png" alt="BCA">
                                    </td>
                                    <td class="float-right">
                                        <p>PT Travel kencana semesta <br>Bank BCA <br>900.3434.456</p>
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                  <a href="/confirmation"><button type="button" class="btn btn-success btn-block" style="background-color: #76B840; !important;">Continue</button></a>
                                </div>
                                <div class="col-md-12 cancel-wrapper">
                                    <a href="#" class="btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- checkout end -->

        </div>

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <p>Travelology Copyrights 2020, All right Reserved, Made with love from Jakarta</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
            <!-- checkout end -->
@endsection()