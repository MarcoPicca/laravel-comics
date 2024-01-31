<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header DC comic page</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>

        <div class="container-header">
            <div class="container-content-header">
                <section class="container-logo">
                    <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc logo">
                </section>
                <ul class="container-nav-list mb-0 pl-0">
                    <li class="nav-list">Characters</li>
                    <li class="nav-list">Comics</li>
                    <li class="nav-list">Movie</li>
                    <li class="nav-list">Tv</li>
                    <li class="nav-list">Games</li>
                    <li class="nav-list">Collectibles</li>
                    <li class="nav-list">Videos</li>
                    <li class="nav-list">Fans</li>
                    <li class="nav-list">News</li>
                    <li class="nav-list">Shop</li>
                </ul>
            </div>
        </div>
        
    </header>
</body>
</html>