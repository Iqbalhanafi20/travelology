@extends('layouts.app')

@section('title','Checkout Success')

@section('content')
<main>
       <div class="section-success d-flex align-items-center">
           <div class="col text-center">
               <img src="frontend/images/wallet.svg" alt="">
               <h1>Congratulation! Success</h1>
               <p>We've sent you email for trip instruction
                   <br>
                   please read it as well
               </p>
               <a href="index.html" class="btn btn-home-page mt-3 px-3">
                   Home Page
               </a>
           </div>
       </div>
   </main>
@endsection
