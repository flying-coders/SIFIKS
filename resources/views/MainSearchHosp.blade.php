@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

    <div class="container">
        <div class="row">
            <h1 class="font-weight-bold">Pencarian Terkait : </h1>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/mainsearch-article">Info dan Diskusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mainsearch-doctor">Dokter dan Spesialis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/mainsearch-hospital">Rumah Sakit dan Tindakan Medis</a>
                </li>
            </ul>
        </div>
        </div>
    </div>

    <div class="container">

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="{{ asset('storage/images/rs1.jpeg') }}" alt="..." class="card-img">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Rumah Sakit Jantung</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="\viewdoctor" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="{{ asset('storage/images/rs2.jpeg') }}" alt="..." class="card-img">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Rumah Sakit Jantung</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="\viewdoctor" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
