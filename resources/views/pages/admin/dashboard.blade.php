
@extends('layouts.admin')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Paket Travel</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>10</h3>
                                        <div class="small text-white"><i style='font-size: 30px;' class="fas fa-hotel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>14</h3>
                                        <div class="small text-white"><i style='font-size: 30px;' class="fas fa-dollar-sign"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Pending</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>8</h3>
                                        <div class="small text-white"><i style='font-size: 30px;' class="fas fa-clipboard-list"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Sukses</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>18</h3>
                                        <div class="small text-white"><i style='font-size: 30px;' class="fas fa-check"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection