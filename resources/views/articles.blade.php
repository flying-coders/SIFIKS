@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')
    <div class="container">
        <div class="text-center mt-4 mb-4"><h3>{{ $data['category'] }}</h3></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari tentang {{ $data['category'] }}...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                @foreach(range('A', 'Z') as $key)
                    <div class="btn-group mr-2">
                        <a href="#" class="btn btn-primary btn-sm">{{ $key }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection