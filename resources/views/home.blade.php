@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

    <div class="container-fluid">

        @include('layouts.inc.messages')

        <div class="jumbotron p-4 p-md-5 text-white rounded bg-info">
            <div class="row">
                <div class="col-md-6 px-0">
                    <img src="https://i.ibb.co/JQbV1BQ/sifiks5.png" width="45%" alt="sifiks5" border="0">
                    <p class="lead my-3" >Kekayaan bukan berasal dari uang, melainkan kesehatan</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari SIFIKS" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                        </div>
                    </div>
                    <a class="btn btn-primary" role="button" href="/ask">Tanya Dokter</a>
                    <a class="btn btn-primary" role="button" href="/SearchDokter">Cari Dokter</a>
                    <a class="btn btn-primary" role="button" href="/SearchRS">Cari Rumah Sakit</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/images/dokter.jpg') }}" alt="Dokter" class="img-thumbnail float-right" >
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Info Kesehatan Terkini</h1>
        <div class="row">
            @foreach($article as $art)
            <a href="{{route('user.article.show',['id'=>$art->id])}}" class="col-md-4 text-decoration-none">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/images/dokter.jpg') }}"  alt="Buah" class="img-fluid" >
                    <div class="card-body text-black-50">
                        <h4>{{ $art->trimStr($art->title) }}</h4>
                        <p class="card-text">{!! $art->cutStr($art->content) !!}</p>
                        <div class="d-flex justify-content-end align-items-center">
                            <small class="text-muted">{{$art->created_at->diffForHumans()}}</small>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
