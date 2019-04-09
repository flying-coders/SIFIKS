@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

    <div class="container">
        {{-- <div class="text-center mt-4 mb-4"><h3>{{ $data['category'] }}</h3></div> --}}
        <div class="row">
            <div class="col-sm-12">
                <br> <br>
                <div class="input-group">
                    {{-- <input type="text" class="form-control" placeholder="Cari tentang {{ $data['category'] }}..."> --}}
                    <input type="text" class="form-control" placeholder="Cari Tindakan Medis">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 class="font-weight-bold">Cari Spesialis</h2>
        <div class="row">
            <div class="index-by-letter-button">
                <div class="index-by-letter">
                    <ul class="menu-children">

                    <li class="index-item"><a href="/listdoctor">Ahli Estetika</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Anak</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Anestesi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Bedah</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Bedah Anak</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Bedah Plastik</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Endokrin</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Gastroenterologi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Gigi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Ginjal</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Gizi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Jantung</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Kandungan</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Kulit</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Mata</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Onkologi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Ortopedi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Paru</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Penyakit Dalam</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Radiologi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Rehabilitasi Medis</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Reumatologi</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Saraf</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter THT</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Umum</a></li>

                    <li class="index-item"><a href="/listdoctor">Dokter Urologi</a></li>

                    <li class="index-item"><a href="/listdoctor">Psikiater</a></li>

                    <li class="index-item"><a href="/listdoctor">Psikolog</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
