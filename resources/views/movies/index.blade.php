@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    Movies
</h1>

<div class="row">
    @foreach ($movies as $movie)
        <div class="col-12 col-sm-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    {{-- Il primo parametro di route() è il nome della ROTTA che voglio linkare --}}
                    {{-- Il secondo parametro di route() è un array associativo le cui chiavi sono i nomi dei parametri che voglio valorizzare (e quindi, i valori di queste chiavi sono i valori che voglio dare a tali parametri) --}}
                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">
                        Vai al singolo movie
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
