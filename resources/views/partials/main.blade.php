<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <main>
        <div class="container-main">
            <section class="container-header-main">
                <div class="content-header-main">
                    <div class="jumbotron"></div>
                </div>
            </section>
            <section class="container-main-main">
                <div class="container-main-card">
                
                @foreach ($comics as $com)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $com['thumb'] }}" alt="">
                                <div class="card-body">
                                    <p class="text-uppercase">
                                        {{ $com['series'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                @endforeach
                
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
    </main>
</body>
</html>