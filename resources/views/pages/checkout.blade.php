@extends('layouts.app')

@section('title','Checkout Travel')

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
                                    <li class="breadcrumb-item">
                                        Details
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Checkout
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <!-- left content -->
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>Who is Going?</h1>
                                <p>
                                    Trip to Bromo,Malang,Indonesia
                                </p>
                                <br>
                                <div class="attendee">
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>Picture</td>
                                                <td>Name</td>
                                                <td>Nationality</td>
                                                <td>VIsa</td>
                                                <td>Passport</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <img src="{{ url('frontend/images/member1.png') }}" alt="" height="60">
                                                </td>
                                                <td class="align-middle">
                                                    John Carpenter
                                                </td>
                                                <td class="align-middle">
                                                    CN
                                                </td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="#">
                                                        <img src="{{ url('frontend/images/remove.svg') }}" alt="remove">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <img src="{{ url('frontend/images/member2.png') }}" alt="" height="60">
                                                </td>
                                                <td class="align-middle">
                                                    Wika Art
                                                </td>
                                                <td class="align-middle">
                                                    SG
                                                </td>
                                                <td class="align-middle">30 Days</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="#">
                                                        <img src="{{ url('frontend/images/remove.svg') }}" alt="remove">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="member mt-3">
                                    <h2>Add Member</h2>
                                    <form action="#" class="form-inline">
                                        <label for="inputUsername" class="sr-only">Name</label>
                                        <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                        <label for="inputVisa" class="sr-only">Visa</label>
                                        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                            <option value="Visa" selected>Visa</option>
                                            <option value="30 Days">30 Days</option>
                                            <option value="N/E">N/E</option>
                                        </select>

                                        <label for="doepassport" class="sr-only">Doe Passport</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                        </div>

                                        <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                                    </form>
                                    <h3 class="mt-2 mb-0">Note</h3>
                                    <p class="disclaimer mb-0">
                                        You are only invite member that has registered in Travelology
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- right content -->
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                
                                <h2>Checkout Informations</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">
                                            2 Person
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional VISA</th>
                                        <td width="50%" class="text-right">
                                            $ 190,00
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">
                                            $ 80,00 / Person
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">
                                            $ 280,00
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+Unique Code)</th>
                                        <td width="50%" class="text-right">
                                           <span style="color: #1ABC9C;font-weight: bold;">$279,</span><span style="color: salmon;font-weight: bold;">33</span>  / Person
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <h2>Payment Instructions</h2>
                                <p class="payment-instructions">Please complete your payments before continue the wonderful trip</p>
                                <div class="bank">
                                    <div class="bank-item pb-3">
                                        <img src="frontend/images/creditcard.svg" alt="card" class="bank-image">
                                        <div class="description">
                                            <h1>PT Travelology kuy</h1>
                                            <p>
                                                0851-0909-8787
                                                <br>
                                                Bank BCA (Bank Central Asia)
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bank-item pb-3">
                                        <img src="frontend/images/creditcard.svg" alt="card" class="bank-image">
                                        <div class="description">
                                            <h1>PT Travelology kuy</h1>
                                            <p>
                                                0899-0909-8787
                                                <br>
                                                Bank CIMB (Bank Central Asia)
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="join-container">
                                <a href="success.html" class="btn btn-block btn-join-now mt-3 py-2">
                                    I have made payment
                                </a>
                            </div>
                            <div class="text-center mt-1">
                                <a href="details.html" class="text-muted mt-2">
                                    Cancel Booking
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@endsection

@push('prepend-style')
<!-- gijgo -->
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title : false,
                tint: '#333',
                zoffset: 35,
            });

            $(".datepicker").datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar.svg') }}" />'
                }
            })
        })
    </script>
@endpush
