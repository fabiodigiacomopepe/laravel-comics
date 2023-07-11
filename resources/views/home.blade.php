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
                            <h4><a href="{{ route('pagina-fumetto') }}">{{ $fumetto['title'] }}</a></h4>
                        </li>
                    @endforeach
                </ul>
                <div class="button_loadmore">LOAD MORE</div>
            </div>
        </main>

        <section class="container_blue-section">
            <div class="container_blue">
                <div>
                    <img class="b" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="buy-comics-digital-comics">
                    <span>DIGITAL COMICS</span>
                </div>

                <div>
                    <img class="s" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                        alt="buy-comics-merchandise">
                    <span>DC MERCHAINDISE</span>
                </div>

                <div>
                    <img class="s" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="buy-comics-subscriptions">
                    <span>SUBSCRIPTIONS</span>
                </div>

                <div>
                    <img class="b" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="buy-comics-shop-locator">
                    <span>COMIC SHOP LOCATOR</span>
                </div>

                <div>
                    <img class="svg" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                        alt="buy-dc-power-visa">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </section>
    </div>
@endsection
