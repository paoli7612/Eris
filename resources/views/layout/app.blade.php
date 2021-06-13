<html>
    <head>
        <title>Eris - @yield('title') </title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('layout.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>