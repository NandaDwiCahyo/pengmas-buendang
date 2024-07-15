@extends('layouts')

@section('title', 'Dashboard')

@section('contents')

   <center>
    <div class="container pt-5">
        <div class="row">
            <div class="col align-self-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/nomo.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Nomophobia</h5>
                      <p class="card-text">Cek seberapa tinggi tingkat nomophobia mu sekarang</p>
                      <a href="/nomophobia" class="btn btn-primary">Cek sekarang</a>
                    </div>
                  </div>
            </div>
            <div class="col align-self-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/literasi-digital.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Literasi Digital</h5>
                      <p class="card-text">Cek seberapa tinggi tingkat Literasi Digitalmu sekarang</p>
                      <a href="/literasi-digital" class="btn btn-primary">Cek sekarang</a>
                    </div>
                  </div>
            </div>
        </div>
       </div>
   </center>
   

@endsection