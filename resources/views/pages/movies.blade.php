@extends('layouts.base')

@section('content')

<h2>Lista dei film: {{ $movies -> count() }}</h2>

@foreach($movies as $movie)

    <li>
        Titolo: {{ $movie -> title }} <br>
        Trama: {{ $movie -> plot}} <br>
        Anno di uscita: {{ $movie -> release_date }}<br>
        Attore protagonista: {{ $movie -> actor -> name }} {{ $movie -> actor -> surname}}
    </li>
    <br>
@endforeach

@endsection