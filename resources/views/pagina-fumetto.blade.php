@extends('layouts.main-layout')

@section('pageName')
    Pagina fumetto
@endsection

@section('content-2')
    <div id="descrizione-fumetto">
        <div class="sezione-blu">
            <div class="thumb">
                <div>
                    <img src="{{ $fumetti[0]['thumb'] }}" alt="thumb del fumetto">
                </div>
            </div>
        </div>

        <div class="info">
            <h2>{{ $fumetti[0]['title'] }}</h2>

            <div>{{ $fumetti[0]['price'] }}</div>

            <div>{{ $fumetti[0]['description'] }}</div>

            @foreach ($fumetti[0]['artists'] as $artista)
                <div>{{ $artista }}</div>
            @endforeach

            @foreach ($fumetti[0]['writers'] as $scrittore)
                <div>{{ $scrittore }}</div>

                <div>{{ $fumetti[0]['series'] }}</div>

                <div>{{ $fumetti[0]['price'] }}</div>

                <div>{{ $fumetti[0]['sale_date'] }}</div>
            @endforeach
        </div>
    </div>
@endsection
