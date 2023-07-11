@extends('layouts.main-layout')

@section('pageName')
    Home
@endsection

@section('content')
    <div id="home">
        <main>
            <div class="container">
                <div class="current_series">CURRENT SERIES</div>
                <ul>
                    @foreach ($fumetti as $fumetto)
                        <li>
                            <div>
                                <img src="{{ $fumetto['thumb'] }}" alt="thumb del fumetto">
                            </div>
                            <h4>{{ $fumetto['title'] }}</h4>
                        </li>
                    @endforeach
                </ul>
                <div class="button_loadmore">LOAD MORE</div>
            </div>
        </main>
    </div>
@endsection
