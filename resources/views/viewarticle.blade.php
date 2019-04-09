@extends('layouts.app')

@section('content')

    @include('layouts.inc.navbar')

<div class="container mt-4">
		<div class="container">
            <div class="row col-md-12">
                <div class="col-md-6">
                    <span class="text-muted">{{ $article->getCat($article->category) }}</span>
                    <h1> {{ $article->title }} </h1>
                    <p>
                        <small>Ditinjau oleh </small>
                        @if($article->admin_id == null)
                            <strong>dr. {{ $article->doctor->name }} {{ $article->doctor->specialty->degree  }}</strong>
                        @else
                            <strong>Admin</strong>
                        @endif
                        <br>
                        <small>{{ $article->created_at->diffForHumans() }}</small>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row container">
                <div class="col-md-12">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
