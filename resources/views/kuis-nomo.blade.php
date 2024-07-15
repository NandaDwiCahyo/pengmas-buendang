@extends('layouts')

@section('title', 'Kuis Nomophobia')

@section('contents')
<h1 class="text-center my-5">Kuis Nomophobia</h1>

<div class="row text-center justify-content-center">
    <div class="col-sm-2 me-5">
        <h3 class="mb-3">Soal Kuis</h3>
        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-1">1</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-2">2</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-3">3</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-4">4</a>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-5">5</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-6">6</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-7">7</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-8">8</a>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-9">9</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-10">10</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-11">11</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-12">12</a>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-13">13</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-14">14</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-15">15</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-16">16</a>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-17">17</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-18">18</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-19">19</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-20">20</a>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <form action="/results-nomo" method="post">
            @csrf
            <div id="soal-kuis-1">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 1</h5>
                        <p class="card-text mb-3">Saya merasa tidak nyaman jika terus menerus tidak dapat mengakses informasi melalui smartphone.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-1" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-1">Selanjutnya</a>
            </div>

            <div id="soal-kuis-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 2</h5>
                        <p class="card-text mb-3">Saya merasa kesal jika tidak dapat mencari informasi di smartphone ketika saya membutuhkannya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-2" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-2">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-2">Selanjutnya</a>
            </div>

            <div id="soal-kuis-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 3</h5>
                        <p class="card-text mb-3">Saya merasa gugup jika  tidak dapat mengikuti berita atau informasi di smartphone.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-3" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-3">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-3">Selanjutnya</a>
            </div>

            <div id="soal-kuis-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 4</h5>
                        <p class="card-text mb-3">Saya merasa terganggu ketika tidak dapat mengunakan smartphone dan/atau fasilitasnya ketika saya membutuhkannya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-4" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-4">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-4">Selanjutnya</a>
            </div>

            <div id="soal-kuis-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 5</h5>
                        <p class="card-text mb-3">Saya takut ketika kehabisan baterai smartphone.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-5" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-5">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-5">Selanjutnya</a>
            </div>

            <div id="soal-kuis-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 6</h5>
                        <p class="card-text mb-3">Saya panik ketika kehabisan atau telah mencapai batas paket data bulanan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-6" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-6">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-6">Selanjutnya</a>
            </div>

            <div id="soal-kuis-7">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 7</h5>
                        <p class="card-text mb-3">Jika saya tidak ada sinyal paket data, atau tidak dapat terkoneksi dengan Wi-fi, maka saya akan mengecek terus menerus untuk melihat jika ada sinyal atau dapat menemukan koneksi.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-7" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-7">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-7">Selanjutnya</a>
            </div>

            <div id="soal-kuis-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 8</h5>
                        <p class="card-text mb-3">Jika saya tidak dapat menggunakan smartphone, saya takut akan tersesat di suatu tempat yang tidak saya ketahui.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-8" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-8">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-8">Selanjutnya</a>
            </div>

            <div id="soal-kuis-9">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 9</h5>
                        <p class="card-text mb-3">Jika saya tidak dapat mengecek smartphone untuk sementara waktu, maka akan timbul keinginan untuk mengeceknya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-9" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-9">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-9">Selanjutnya</a>
            </div>

            <div id="soal-kuis-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 10</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya merasa cemas karena saya tidak dapat berkomunikasi secara instan dengan keluarga, dosen dan/atau teman.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-10" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-10">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-10">Selanjutnya</a>
            </div>

            <div id="soal-kuis-11">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 11</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan merasa khawatir karena keluarga, dosen dan/atau teman tidak dapat menjangkau saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-11" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-11">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-11">Selanjutnya</a>
            </div>

            <div id="soal-kuis-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 12</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan merasa gugup karena saya tidak dapat menerima SMS, telepon, dan chat.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-12" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-12">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-12">Selanjutnya</a>
            </div>

            <div id="soal-kuis-13">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 13</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan merasa cemas karena saya tidak dapat terhubung/ keep in touch dengan keluarga, dan/atau teman.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-13" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-13">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-13">Selanjutnya</a>
            </div>

            <div id="soal-kuis-14">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 14</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan merasa gugup karena saya tidak dapat mengetahui jika ada seseorang yang mencoba menghubungi saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-14" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-14">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-14">Selanjutnya</a>
            </div>

            <div id="soal-kuis-15">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 15</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan merasa cemas jika koneksi jaringan saya dengan keluarga, dosen dan/atau teman selama ini akan putus.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-15" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-15">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-15">Selanjutnya</a>
            </div>

            <div id="soal-kuis-16">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 16</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya akan cemas karena saya tidak dapat terhubung dengan akun online/ media sosial saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-16" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-16">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-16">Selanjutnya</a>
            </div>

            <div id="soal-kuis-17">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 17</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya merasa tidak nyaman saat saya tidak up-to-date dengan media sosial dan jaringan online lainnya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-17" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-17">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-17">Selanjutnya</a>
            </div>

            <div id="soal-kuis-18">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 18</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya merasa aneh saat saya tidak dapat mengecek pemberitahuan (notification) terbaru dari media sosial  atau jaringan online lainnya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-18" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-18">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-18">Selanjutnya</a>
            </div>

            <div id="soal-kuis-19">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 19</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya merasa cemas saat saya tidak dapat mengecek pesan di akun online atau media sosial.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-19" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-19">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-19">Selanjutnya</a>
            </div>

            <div id="soal-kuis-20">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 20</h5>
                        <p class="card-text mb-3">Jika saya tidak ada smartphone, Saya merasa aneh karena saya tidak tahu harus berbuat apa.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Setuju</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio5" value="6">
                                <label class="form-check-label" for="inlineRadio5">6</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-20" id="inlineRadio5" value="7">
                                <label class="form-check-label" for="inlineRadio5">7</label>
                            </div>
                            <p class="ms-3">Setuju</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-19">Sebelumnya</a>
                <button type="submit" class="btn btn-primary float-end">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        // Inisiasi Hidden
        $('#soal-kuis-2').hide();
        $('#soal-kuis-3').hide();
        $('#soal-kuis-4').hide();
        $('#soal-kuis-5').hide();
        $('#soal-kuis-6').hide();
        $('#soal-kuis-7').hide();
        $('#soal-kuis-8').hide();
        $('#soal-kuis-9').hide();
        $('#soal-kuis-10').hide();
        $('#soal-kuis-11').hide();
        $('#soal-kuis-12').hide();
        $('#soal-kuis-13').hide();
        $('#soal-kuis-14').hide();
        $('#soal-kuis-15').hide();
        $('#soal-kuis-16').hide();
        $('#soal-kuis-17').hide();
        $('#soal-kuis-18').hide();
        $('#soal-kuis-19').hide();
        $('#soal-kuis-20').hide();

        // Tombol Navigasi Soal Kuis
        $("#btn-soal-1").click(function(){
            $('#soal-kuis-1').show();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
        });

        $("#btn-soal-2").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').show();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
        });

        $("#btn-soal-3").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').show();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-4").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').show();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-5").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').show();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-6").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').show();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-7").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').show();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-8").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').show();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-9").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').show();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-10").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').show();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-11").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').show();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-12").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').show();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-13").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').show();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-14").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').show();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-15").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').show();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-16").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').show();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-17").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').show();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-18").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').show();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-19").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').show();
            $('#soal-kuis-20').hide();
           
        });

        $("#btn-soal-20").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').show();
           
        });

        
        // Tombol Selanjutnya
        $("#btn-selanjutnya-1").click(function(){
            $('#soal-kuis-1').hide();
            $('#soal-kuis-2').show();
        });

        $("#btn-selanjutnya-2").click(function(){
            $('#soal-kuis-2').hide();
            $('#soal-kuis-3').show();
        });

        $("#btn-selanjutnya-3").click(function(){
            $('#soal-kuis-3').hide();
            $('#soal-kuis-4').show();
        });

        $("#btn-selanjutnya-4").click(function(){
            $('#soal-kuis-4').hide();
            $('#soal-kuis-5').show();
        });

        $("#btn-selanjutnya-5").click(function(){
            $('#soal-kuis-5').hide();
            $('#soal-kuis-6').show();
        });

        $("#btn-selanjutnya-6").click(function(){
            $('#soal-kuis-6').hide();
            $('#soal-kuis-7').show();
        });

        $("#btn-selanjutnya-7").click(function(){
            $('#soal-kuis-7').hide();
            $('#soal-kuis-8').show();
        });

        $("#btn-selanjutnya-8").click(function(){
            $('#soal-kuis-8').hide();
            $('#soal-kuis-9').show();
        });

        $("#btn-selanjutnya-9").click(function(){
            $('#soal-kuis-9').hide();
            $('#soal-kuis-10').show();
        });

        $("#btn-selanjutnya-10").click(function(){
            $('#soal-kuis-10').hide();
            $('#soal-kuis-11').show();
        });

        $("#btn-selanjutnya-11").click(function(){
            $('#soal-kuis-11').hide();
            $('#soal-kuis-12').show();
        });

        $("#btn-selanjutnya-12").click(function(){
            $('#soal-kuis-12').hide();
            $('#soal-kuis-13').show();
        });

        $("#btn-selanjutnya-13").click(function(){
            $('#soal-kuis-13').hide();
            $('#soal-kuis-14').show();
        });

        $("#btn-selanjutnya-14").click(function(){
            $('#soal-kuis-14').hide();
            $('#soal-kuis-15').show();
        });

        $("#btn-selanjutnya-15").click(function(){
            $('#soal-kuis-15').hide();
            $('#soal-kuis-16').show();
        });

        $("#btn-selanjutnya-16").click(function(){
            $('#soal-kuis-16').hide();
            $('#soal-kuis-17').show();
        });

        $("#btn-selanjutnya-17").click(function(){
            $('#soal-kuis-17').hide();
            $('#soal-kuis-18').show();
        });

        $("#btn-selanjutnya-18").click(function(){
            $('#soal-kuis-18').hide();
            $('#soal-kuis-19').show();
        });

        $("#btn-selanjutnya-19").click(function(){
            $('#soal-kuis-19').hide();
            $('#soal-kuis-20').show();
        });

        

        // Tombol Sebelumnya
        $("#btn-sebelumnya-2").click(function(){
            $('#soal-kuis-2').hide();
            $('#soal-kuis-1').show();
        });

        $("#btn-sebelumnya-3").click(function(){
            $('#soal-kuis-3').hide();
            $('#soal-kuis-2').show();
        });

        $("#btn-sebelumnya-4").click(function(){
            $('#soal-kuis-4').hide();
            $('#soal-kuis-3').show();
        });

        $("#btn-sebelumnya-5").click(function(){
            $('#soal-kuis-5').hide();
            $('#soal-kuis-4').show();
        });

        $("#btn-sebelumnya-6").click(function(){
            $('#soal-kuis-6').hide();
            $('#soal-kuis-5').show();
        });

        $("#btn-sebelumnya-7").click(function(){
            $('#soal-kuis-7').hide();
            $('#soal-kuis-6').show();
        });

        $("#btn-sebelumnya-8").click(function(){
            $('#soal-kuis-8').hide();
            $('#soal-kuis-7').show();
        });

        $("#btn-sebelumnya-9").click(function(){
            $('#soal-kuis-9').hide();
            $('#soal-kuis-8').show();
        });

        $("#btn-sebelumnya-10").click(function(){
            $('#soal-kuis-10').hide();
            $('#soal-kuis-9').show();
        });

        $("#btn-sebelumnya-11").click(function(){
            $('#soal-kuis-11').hide();
            $('#soal-kuis-10').show();
        });

        $("#btn-sebelumnya-12").click(function(){
            $('#soal-kuis-12').hide();
            $('#soal-kuis-11').show();
        });

        $("#btn-sebelumnya-13").click(function(){
            $('#soal-kuis-13').hide();
            $('#soal-kuis-12').show();
        });

        $("#btn-sebelumnya-14").click(function(){
            $('#soal-kuis-14').hide();
            $('#soal-kuis-13').show();
        });

        $("#btn-sebelumnya-15").click(function(){
            $('#soal-kuis-15').hide();
            $('#soal-kuis-14').show();
        });

        $("#btn-sebelumnya-16").click(function(){
            $('#soal-kuis-16').hide();
            $('#soal-kuis-15').show();
        });

        $("#btn-sebelumnya-17").click(function(){
            $('#soal-kuis-17').hide();
            $('#soal-kuis-16').show();
        });

        $("#btn-sebelumnya-18").click(function(){
            $('#soal-kuis-18').hide();
            $('#soal-kuis-17').show();
        });

        $("#btn-sebelumnya-19").click(function(){
            $('#soal-kuis-19').hide();
            $('#soal-kuis-18').show();
        });

        $("#btn-sebelumnya-20").click(function(){
            $('#soal-kuis-20').hide();
            $('#soal-kuis-19').show();
        });
    });
</script>
@endsection