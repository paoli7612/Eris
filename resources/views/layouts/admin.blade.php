<html>

    <head>
        <title>Eris - Admin</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>

        <div class="w3-panel">
            <h1>{{ App\Models\Option::get('sitename') }}</h1>
        </div>

        <div class="w3-panel">
            @yield('content')
        </div>

    </body>
</html>
