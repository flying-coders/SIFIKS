@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-info">
            <div class="row">
              <div class="col-md-6 px-0">

                <h1 class="display-4 font-bold" >Cari Nama Dokter/ Spesialis</h1>
                <p class="lead my-3" >Kekayaan bukan berasal dari uang, melainkan kesehatan</p>
                <div class="row">
                    <div class="col-md-5">
                        <label for="tentang">Saya mencari informasi tentang:</label>
                        <div class="input-group">
                            <input id="tentang" type="text" class="form-control" placeholder="Cari Nama Dokter/Spesialis">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="lokasi">Lokasi</label>
                        <div class="input-group">
                            <input id="lokasi" type="text" class="form-control" placeholder="Semua Lokasi">
                            <div class="input-group-append">
                                <button class="btn btn-warning">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

            </div>
        </div>

    <!-- filter city -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h3>Pilih Kota</h3>
            <hr>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Semua Kota</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">Aceh</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">Bali</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                    <label class="form-check-label" for="exampleRadios4">Cirebon</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                    <label class="form-check-label" for="exampleRadios5">Depok</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6">
                    <label class="form-check-label" for="exampleRadios6">Jakarta</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7">
                    <label class="form-check-label" for="exampleRadios7">Labuan Bajo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8">
                    <label class="form-check-label" for="exampleRadios8">Makassar</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option9">
                    <label class="form-check-label" for="exampleRadios9">Palembang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios10" value="option10">
                    <label class="form-check-label" for="exampleRadios10">Surabaya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option11">
                    <label class="form-check-label" for="exampleRadios11">Tanggerang</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios12" value="option12">
                    <label class="form-check-label" for="exampleRadios12">Yogyakarta</label>
                </div>
            </div>



            <div class="col-md-8">

    <!-- filter day button -->
                <p>Filter :
                    <a class="btn btn-light btn-sm border" data-toggle="collapse" href="\viewdoctorcollapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Hari
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <h3>Pilih Hari Praktik Dokter</h3>
                        <p>Buat Janji sebelum pukul 13:00 WIB untuk konsultasi hari ini.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Senin</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">Selasa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">Rabu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">Kamis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                            <label class="form-check-label" for="defaultCheck5">Jumat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                            <label class="form-check-label" for="defaultCheck6">Sabtu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                            <label class="form-check-label" for="defaultCheck7">Minggu</label>
                        </div>
                    </div>
                </div>

    <!-- list doctor -->
                <br>
                <h1 class="font-weight-bold">Cari Jadwal Dokter</h1>

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/images/marsha.jpg') }}" alt="..." class="card-img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">dr. Marsha Hamrah, Sp.A</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="\viewdoctor" class="btn btn-primary">Buat Janji</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/images/felicia.jpg') }}" alt="..." class="card-img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">dr. Felicia Carissa, Sp.OG</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="\viewdoctor" class="btn btn-primary">Buat Janji</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/images/key.jpg') }}" alt="..." class="card-img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">dr. Key Alexae, Sp.JP</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="\viewdoctor" class="btn btn-primary">Buat Janji</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/images/namira.jpg') }}" alt="..." class="card-img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">dr. Namira Atasya, Sp.PD</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="\viewdoctor" class="btn btn-primary">Buat Janji</a>
                        </div>
                    </div>
                </div>
            </div>

            </div>




        </div>
    </div>
@endsection
