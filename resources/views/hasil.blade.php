@extends('layouts')

@section('title', 'Kuis Literasi Digital')

@section('contents')
<h1 class="text-center my-5">Kuis Literasi Digital</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Hasil test kamu
            </div>
            <div class="card-body">
                <h5>Hasil Kuis Literasi Digital Kamu Adalah: <span class="fw-bold">{{ $summary }}</span></h5>
            </div>
        </div>
        <a href="/" class="btn btn-primary mt-3">Kembali ke menu utama</a>
    </div>
</div>
@endsection('contents')