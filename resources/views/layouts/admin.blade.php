<html>

    <head>
        <title>Eris - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-{{ theme() }}.css">
    </head>

    <body>

        <div class="w3-panel">
            <div class="w3-panel w3-theme w3-display-container w3-card-4">
                <h1 class="w3-hide-small w3-left">
                    {{ config('app.name') }}
                </h1>
                <a class="w3-hide-small w3-right w3-btn w3-theme-l3 w3-display-right w3-margin-right w3-hover-red" href="/">
                    Torna al sito...
                </a>

                <div class="w3-bar w3-panel w3-center w3-hide-medium w3-hide-large">
                    <a class="w3-btn w3-theme-l3 w3-hover-red w3-round-large" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>
                
            </div>
        </div>


        @yield('content')

    </body>
</html>
