@extends('layouts')

@section('title', 'Kuis Literasi Digital')

@section('contents')
<h1 class="text-center my-5">Kuis Literasi Digital</h1>

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

        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-21">21</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-22">22</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-23">23</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-24">24</a>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-25">25</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-26">26</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-27">27</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-28">28</a>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-29">29</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-30">30</a>
            </div>
            <div class="col-3">
                <a href="#" class="btn btn-outline-secondary" id="btn-soal-31">31</a>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <form action="/results" method="post">
            @csrf
            <div id="soal-kuis-1">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 1</h5>
                        <p class="card-text mb-3">Saya mampu menggunakan perangkat (telepon pintar, laptop, ipad  dll) untuk mengakses pembelajaran daring.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-1">Selanjutnya</a>
            </div>

            <div id="soal-kuis-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 2</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menggunakan mesin pencari seperti (Google, Yahoo,dll) untuk mencari informasi terkait pembelajaran di internet.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu mencari informasi di internet melalui beragam aplikasi.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memilih informasi yang sesuai dengan kebutuhan saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu mengabaikan informasi yang tidak sesuai dengan kebutuhan saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menghapus informasi yang tidak sesuai dengan kebutuhan saya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memahami informasi tertulis sesuai dengan bahasa yang digunakan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memahami simbol-simbol (emoticon, stiker) yang digunakan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memahami materi pada video pembelajaran.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menyebarkan informasi sesuai dengan target pesannya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menentukan kesesuaian pesan dengan aplikasi medianya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menyebarkan informasi sesuai dengan sifat pesan (informatif, edukatif, hiburan atau persuasif).</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu membuat pesan tertulis di media digital.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu membuat pesan foto/gambar di media digital.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu membuat video di media digital.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memahami maksud informasi berdasarkan format (Format Informasi yang dimaksudkan adalah apakah informasi dalam bentuk berita, opini, feature, dokumenter, iklan, meme, karikatur, dll).</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menghubungkan informasi dengan tujuan pembuat pesan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu mengidentifikasi adanya keberagaman makna informasi.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu membandingkan informasi dari beragam sumber informasi yang diterima.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
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
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu mengidentifikasi kekeliruan informasi yang diterima.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
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
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-20">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-20">Selanjutnya</a>
            </div>

            <div id="soal-kuis-21">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 21</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya tidak mampu membuat pesan tertulis di media digital.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-21" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-21" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-21" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-21" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-21" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-21">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-21">Selanjutnya</a>
            </div>

            <div id="soal-kuis-22">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 22</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memutuskan kebenaran informasi yang diterima.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-22" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-22" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-22" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-22" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-22" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-22">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-22">Selanjutnya</a>
            </div>

            <div id="soal-kuis-23">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 23</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu menentukan sumber informasi yang dapat dipercaya.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-23" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-23" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-23" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-23" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-23" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-23">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-23">Selanjutnya</a>
            </div>

            <div id="soal-kuis-24">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 24</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memilih informasi dari berbagai sumber.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-24" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-24" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-24" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-24" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-24" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-24">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-24">Selanjutnya</a>
            </div>

            <div id="soal-kuis-25">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 25</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu memberi penilaian terhadap kualitas informasi yang diterima.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-25" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-25" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-25" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-25" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-25" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-25">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-25">Selanjutnya</a>
            </div>

            <div id="soal-kuis-26">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 26</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya melibatkan diri dalam komunitas online yang sesuai dengan kebutuhan saya. *contoh: Saya mampu memanfaatkan grup WA kelas sebagai media bertanya dan memberikan pendapat terkait materi perkuliahan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-26" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-26" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-26" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-26" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-26" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-26">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-26">Selanjutnya</a>
            </div>

            <div id="soal-kuis-27">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 27</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya rutin mengikuti kegiatan komunitas online.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-27" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-27" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-27" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-27" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-27" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-27">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-27">Selanjutnya</a>
            </div>

            <div id="soal-kuis-28">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 28</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya berkontribusi dalam komunitas online. *contoh: Saya berperan aktif dalam diskusi secara online pada grup kelas mata kuliah.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-28" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-28" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-28" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-28" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-28" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-28">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-28">Selanjutnya</a>
            </div>

            <div id="soal-kuis-29">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 29</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mampu membuat forum/kelompok/komunitas online  (seperti grup whatsapp, grup facebook dll) untuk diskusi antar peserta didik dan pendidik dalam perkuliahan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-29" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-29" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-29" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-29" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-29" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-29">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-29">Selanjutnya</a>
            </div>

            <div id="soal-kuis-30">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 30</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mengelola forum/kelompok di komunitas online (media sosial, chat group, dan lain-lain).</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-30" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-30" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-30" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-30" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-30" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-30">Sebelumnya</a>
                <a href="#" class="btn btn-success float-end" id="btn-selanjutnya-30">Selanjutnya</a>
            </div>

            <div id="soal-kuis-31">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kuis No. 31</h5>
                        <p class="card-text mb-3">Pada pembelajaran daring, Saya mengelola topik dalam komunitas online (media sosial, chat group, dan lain-lain) untuk mencapai suatu tujuan.</p>
                        <div class="d-flex justify-content-center">
                            <p class="me-3">Tidak Mampu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-31" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-31" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-31" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-31" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="soal-kuis-31" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <p class="ms-3">Mampu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success float-start" id="btn-sebelumnya-31">Sebelumnya</a>
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
        $('#soal-kuis-21').hide();
        $('#soal-kuis-22').hide();
        $('#soal-kuis-23').hide();
        $('#soal-kuis-24').hide();
        $('#soal-kuis-25').hide();
        $('#soal-kuis-26').hide();
        $('#soal-kuis-27').hide();
        $('#soal-kuis-28').hide();
        $('#soal-kuis-29').hide();
        $('#soal-kuis-30').hide();
        $('#soal-kuis-31').hide();

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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
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
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-21").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').show();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-22").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').show();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-23").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').show();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-24").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').show();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-25").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').show();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-26").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').show();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-27").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').show();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-28").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').show();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-29").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').show();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-30").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').show();
            $('#soal-kuis-31').hide();
        });

        $("#btn-soal-31").click(function(){
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
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').show();
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

        $("#btn-selanjutnya-20").click(function(){
            $('#soal-kuis-20').hide();
            $('#soal-kuis-21').show();
        });

        $("#btn-selanjutnya-21").click(function(){
            $('#soal-kuis-21').hide();
            $('#soal-kuis-22').show();
        });

        $("#btn-selanjutnya-22").click(function(){
            $('#soal-kuis-22').hide();
            $('#soal-kuis-23').show();
        });

        $("#btn-selanjutnya-23").click(function(){
            $('#soal-kuis-23').hide();
            $('#soal-kuis-24').show();
        });

        $("#btn-selanjutnya-24").click(function(){
            $('#soal-kuis-24').hide();
            $('#soal-kuis-25').show();
        });

        $("#btn-selanjutnya-25").click(function(){
            $('#soal-kuis-25').hide();
            $('#soal-kuis-26').show();
        });

        $("#btn-selanjutnya-26").click(function(){
            $('#soal-kuis-26').hide();
            $('#soal-kuis-27').show();
        });

        $("#btn-selanjutnya-27").click(function(){
            $('#soal-kuis-27').hide();
            $('#soal-kuis-28').show();
        });

        $("#btn-selanjutnya-28").click(function(){
            $('#soal-kuis-28').hide();
            $('#soal-kuis-29').show();
        });

        $("#btn-selanjutnya-29").click(function(){
            $('#soal-kuis-29').hide();
            $('#soal-kuis-30').show();
        });

        $("#btn-selanjutnya-30").click(function(){
            $('#soal-kuis-30').hide();
            $('#soal-kuis-31').show();
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

        $("#btn-sebelumnya-21").click(function(){
            $('#soal-kuis-21').hide();
            $('#soal-kuis-20').show();
        });

        $("#btn-sebelumnya-22").click(function(){
            $('#soal-kuis-22').hide();
            $('#soal-kuis-21').show();
        });

        $("#btn-sebelumnya-23").click(function(){
            $('#soal-kuis-23').hide();
            $('#soal-kuis-22').show();
        });

        $("#btn-sebelumnya-24").click(function(){
            $('#soal-kuis-24').hide();
            $('#soal-kuis-23').show();
        });

        $("#btn-sebelumnya-25").click(function(){
            $('#soal-kuis-25').hide();
            $('#soal-kuis-24').show();
        });

        $("#btn-sebelumnya-26").click(function(){
            $('#soal-kuis-26').hide();
            $('#soal-kuis-25').show();
        });

        $("#btn-sebelumnya-27").click(function(){
            $('#soal-kuis-27').hide();
            $('#soal-kuis-26').show();
        });

        $("#btn-sebelumnya-28").click(function(){
            $('#soal-kuis-28').hide();
            $('#soal-kuis-27').show();
        });

        $("#btn-sebelumnya-29").click(function(){
            $('#soal-kuis-29').hide();
            $('#soal-kuis-28').show();
        });

        $("#btn-sebelumnya-30").click(function(){
            $('#soal-kuis-30').hide();
            $('#soal-kuis-29').show();
        });

        $("#btn-sebelumnya-31").click(function(){
            $('#soal-kuis-31').hide();
            $('#soal-kuis-30').show();
        });
    });
</script>
@endsection