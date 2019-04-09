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
        <h2 class="font-weight-bold">Cari Tindakan Medis</h2>
        <div class="row">
            <div class="index-by-letter-button">
                <div class="index-by-letter">
                    <ul class="menu-children">

                    <li class="index-item"><a href="/listhospital">Anak</a></li>

                    <li class="index-item"><a href="/listhospital">Bedah Plastik</a></li>

                    <li class="index-item"><a href="/listhospital">Bedah Tulang</a></li>

                    <li class="index-item"><a href="/listhospital">Bedah Umum</a></li>

                    <li class="index-item"><a href="/listhospital"">Estetik</a></li>

                    <li class="index-item"><a href="/listhospital">Gigi dan Mulut</a></li>

                    <li class="index-item"><a href="/listhospital">Ginjal</a></li>

                    <li class="index-item"><a href="/listhospital">Gizi Klinik</a></li>

                    <li class="index-item"><a href="/listhospital">Jantung dan Pembuluh Darah</a></li>

                    <li class="index-item"><a href="/listhospital">Kanker</a></li>

                    <li class="index-item"><a href="/listhospital">Kebidanan dan Kandungan</a></li>

                    <li class="index-item"><a href="/listhospital">Kedokteran Anestesi dan Terapi Intensif</a></li>

                    <li class="index-item"><a href="/listhospital">Kedokteran Umum</a></li>

                    <li class="index-item"><a href="/listhospital">Kejiwaan</a></li>

                    <li class="index-item"><a href="/listhospital">Kelenjar</a></li>

                    <li class="index-item"><a href="/listhospital">Kulit dan Kelamin</a></li>

                    <li class="index-item"><a href="/listhospital">Laboratorium Klinik</a></li>

                    <li class="index-item"><a href="/listhospital">Mata</a></li>

                    <li class="index-item"><a href="/listhospital">Paru-Paru</a></li>

                    <li class="index-item"><a href="/listhospital">Penyakit Dalam</a></li>

                    <li class="index-item"><a href="/listhospital">Psikologi</a></li>

                    <li class="index-item"><a href="/listhospital">Radiologi</a></li>

                    <li class="index-item"><a href="/listhospital">Rehabilitasi Medis</a></li>

                    <li class="index-item"><a href="/listhospital">Rematik dan Sendi</a></li>

                    <li class="index-item"><a href="/listhospital"">Saluran Kemih</a></li>

                    <li class="index-item"><a href="/listhospital">Saraf</a></li>

                    <li class="index-item"><a href="/listhospital">Sistem Pencernaan</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
