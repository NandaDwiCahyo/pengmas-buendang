@extends('layouts')

@section('title', 'Kuis Nomophobia')

@section('contents')
@include('navbar')
<h1 class="text-center my-5">Kuis Nomophobia</h1>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                Silahkan isi form biodata berikut ini.
            </div>
            <div class="card-body">
                <form action="/kuis-nomo" method="post">
                    @csrf
                    <div class="row justify-content-around">
                        <div class="col-md-5 mb-3">
                            <label for="identitasResponden" class="form-label">Identitas Responden (opsional)</label>
                            <input type="text" class="form-control" id="identitasResponden" name="identitasResponden" placeholder="Jawaban kamu..." value="">
                        </div>
                        <div class="col-md-5 mb-3">
                            <p>Jenis Kelamin <span class="text-danger">*</span></p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="laki-laki" required>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="perempuan" required>
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-md-5 mb-3">
                            <label for="usia" class="form-label">Usia <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="usia" name="usia" placeholder="Jawaban kamu..." required>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="instansi" class="form-label">Instansi (Nama Sekolah/Nama Perguruan Tinggi) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Jawaban kamu..." required>
                            <div class="form-text" id="basic-addon4">Contoh: Universitas Nahdlatul Ulama Surabaya</div>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-md-5 mb-3">
                            <p>Pekerjaan <span class="text-danger">*</span></p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pekerjaan" id="pr1" value="siswa" required>
                                <label class="form-check-label" for="pr1">Siswa</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pekerjaan" id="pr2" value="mahasiswa" required>
                                <label class="form-check-label" for="pr2">Mahasiswa</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pekerjaan" id="pr3" value="guru" required>
                                <label class="form-check-label" for="pr3">Guru</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pekerjaan" id="pr4" value="dosen" required>
                                <label class="form-check-label" for="pr4">Dosen</label>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="akses" class="form-label">Berapa lama Anda akses smartphone dalam satu hari (dalam jam)? <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control" id="akses" name="akses" placeholder="Jawaban kamu..." required>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-md-5 mb-3">
                            <label for="akses" class="form-label">Berapa (GB) konsumsi paket data yang Anda butuhkan dalam sebulan? <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control" id="akses" name="kuota" placeholder="Jawaban kamu..." required>
                        </div>
                        <div class="col-md-5 mb-3">
                            
                        </div>
                    </div>
                    <button class="btn btn-success w-100 mx-auto text-center mt-3">Selanjutnya</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('contents')