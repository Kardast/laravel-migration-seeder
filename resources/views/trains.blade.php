@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')
    <main>

        <h1>{{$trains}}</h1>
        @foreach ($listTrains as $trainInfo)

            <h2>{{ $trainInfo->azienda }}</h2>
            <p>{{ $trainInfo->stazione_di_partenza }}</p>
            <p>{{ $trainInfo->stazione_di_arrivo }}</p>
            <p>{{ $trainInfo->orario_di_partenza }}</p>
            <p>{{ $trainInfo['orario_di_arrivo'] }}</p>
            <p>{{ $trainInfo->codice_treno }}</p>
            <p>{{ $trainInfo->numero_carrozze }}</p>
            <p>{{ $trainInfo->in_orario }}</p>
            <p>{{ $trainInfo->cancellato }}</p>

        @endforeach
        <a href="{{ route('home') }}">Torna alla home</a>
    </main>
@endsection
