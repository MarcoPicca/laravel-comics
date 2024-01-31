<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer DC Comic Page</title>

    @vite('resources/js/app.js')
</head>
<body>
    <footer>
    <section class="container-header-footer">
        <div class="container-content-header-footer">
            <div class="column-header-footer">
                <h3 class="title-content-footer">DC COMICS</h3>
                <ul class="footer-list">
                    <li class="list-footer">Characters</li>
                    <li class="list-footer">Comics</li>
                    <li class="list-footer">Movie</li>
                    <li class="list-footer">Tv</li>
                    <li class="list-footer">Games</li>
                    <li class="list-footer">Videos</li>
                    <li class="list-footer">News</li>
                </ul>
                <h3 class="title-content-footer">SHOP</h3>
                <ul class="footer-list">
                    <li class="list-footer">Shop DC</li>
                    <li class="list-footer">Shop DC Collectibles</li>
                </ul>
            </div>
            <div class="column-header-footer">
                <h3 class="title-content-footer">DC</h3>
                <ul class="footer-list">
                    <li class="list-footer">Terms Of Use</li>
                    <li class="list-footer">Privacy policy (New)</li>
                    <li class="list-footer">Ad Choices</li>
                    <li class="list-footer">Advertising</li>
                    <li class="list-footer">Jobs</li>
                    <li class="list-footer">Subscriptions</li>
                    <li class="list-footer">Talent Workshops</li>
                    <li class="list-footer">CPSC Certificates</li>
                    <li class="list-footer">Ratings</li>
                    <li class="list-footer">Shop Help</li>
                    <li class="list-footer">Contact Us</li>
                </ul>
            </div>
            <div class="column-header-footer">
                <h3 class="title-content-footer">SITES</h3>
                <ul class="footer-list">
                    <li class="list-footer">DC</li>
                    <li class="list-footer">MAD Magazine</li>
                    <li class="list-footer">DC Kids</li>
                    <li class="list-footer">DC Universe</li>
                    <li class="list-footer">DC Power Visa</li>
                </ul>
            </div>
        </div>
        <div class="mega-icon">
            <img class="mega-icon-bg" src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="">
        </div>
    </section>
    <section class="container-footer-footer">
        <div class="container-content-footer-footer">
            <button class="btn-footer" type="button">sign-up now!</button>
            <div class="container-icon-footer">
                <div class="container-text-icon">
                    <h5 class="title-icon-footer">Follow us</h5>
                </div>
                <div class="container-icon">
                    <img class="icon-footer" src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="">
                </div>
                <div class="container-icon">
                    <img class="icon-footer" src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="">
                </div>
                <div class="container-icon">
                    <img class="icon-footer" src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="">
                </div>
                <div class="container-icon">
                    <img class="icon-footer" src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="">
                </div>
                <div class="container-icon">
                    <img class="icon-footer" src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    </footer>
</body>
</html>