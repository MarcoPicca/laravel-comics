
@extends('layouts.app')

@section('main-content')
    <div class="container-main">
        <section class="container-header-main">
            <div class="content-header-main">
                <div class="jumbotron"></div>
            </div>
        </section>
        <section class="container-main-main">
            <div class="container-main-card">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-6 g-1 mb-1">
            
                    @foreach ($comics as $comic)
                            <div class="col">
                                <div class="card">
                                    <img class="img" src="{{ $comic['thumb'] }}" alt="">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $comic['series'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="container-footer-main">
            <div class="container-footer-main-cards">
                <div class="footer-main-card">
                    <img class="img-footer-main" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <p>digital comics</p>
                </div>
                <div class="footer-main-card">
                    <img class="img-footer-main" src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <p>dc merchandise</p>
                </div>
                <div class="footer-main-card">
                    <img class="img-footer-main" src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                    <p>subscription</p>
                </div>
                <div class="footer-main-card">
                    <img class="img-footer-main" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <p>comic shop locator</p>
                </div>
                <div class="footer-main-card">
                    <img class="img-footer-main" src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                    <p>dc power visa</p>
                </div>
            </div>
        </section>
    </div>
@endsection