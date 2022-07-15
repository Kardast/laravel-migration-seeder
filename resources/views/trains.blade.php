@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')
    <main>

        <h2>{{$trains}}</h2>
        <a href="{{ route('home') }}">Torna alla home</a>
    </main>
@endsection
