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

        <div class="info d-flex justify-content-between">
            <div class="info-comic">
                <h2>{{ $fumetti[0]['title'] }}</h2>

                <div class="price-container d-flex">
                    <div class="left d-flex justify-content-between">
                        <div class="price">U.S. Price: <span>{{ $fumetti[0]['price'] }}</span></div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="right d-flex">
                        Check Availability
                    </div>
                </div>

                <div class="description">{{ $fumetti[0]['description'] }}</div>

            </div>

            <div class="foto-laterale">
                <div>ADVERTISEMENT</div>
                <img src="{{ Vite::asset('resources/img/foto-laterale.jpg') }}" alt="foto-laterale">
            </div>
        </div>

        <div class="sezione-grigia">
            <div class="info-autori">
                <div class="col-sinistra">
                    <h3>Talent</h3>
                    <div class="art-by">
                        <div class="sx">Art by:</div>
                        <div class="dx">
                            @foreach ($fumetti[0]['artists'] as $artista)
                                <span>{{ $artista }}, </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="written-by">
                        <div class="sx">Written by:</div>
                        <div class="dx">
                            @foreach ($fumetti[0]['writers'] as $scrittore)
                                <span>{{ $scrittore }}, </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-destra">
                    <h3>Specs</h3>
                    <div class="d-flex riga">
                        <div class="title">Series:</div>
                        <div class="series"><span>{{ $fumetti[0]['series'] }}</span></div>
                    </div>
                    <div class="d-flex riga">
                        <div class="title">U.S. Price:</div>
                        <div class="us-price">{{ $fumetti[0]['price'] }}</div>
                    </div>
                    <div class="d-flex riga">
                        <div class="title">On Sale Date:</div>
                        <div class="onsaledate">{{ $fumetti[0]['sale_date'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
