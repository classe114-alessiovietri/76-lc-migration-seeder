@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1>
    {{ $movie->title }}
</h1>

<div class="row">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>
                        Original title: {{ $movie->original_title }}
                    </li>
                    <li>
                        Nationality: {{ $movie->nationality }}
                    </li>
                    <li>
                        Date: {{ $movie->date }}
                    </li>
                    <li>
                        Vote: {{ $movie->vote }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
