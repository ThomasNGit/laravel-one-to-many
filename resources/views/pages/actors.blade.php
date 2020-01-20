@extends('layouts.base')

@section('content')

<h2>Lista degli attori: {{ $actors -> count() }}</h2>

@foreach($actors as $actor)

    <li>
        Nome: {{ $actor -> name }} <br>
        Cognome: {{ $actor -> surname}} <br>
        Film in cui ha recitato: {{ $actor -> movies() -> count()}}
    </li>
    <br>
@endforeach
@endsection