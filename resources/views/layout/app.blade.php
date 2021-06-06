<html>
    <head>
        <title>
            Eris - @yield('title')
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>

        <div class="panel m-3">
            <a href="/home" class="btn btn-primary">Home</a>
            <a href="/teachers" class="btn btn-primary">Professori</a>
            <a href="/courses" class="btn btn-primary">Corsi</a>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>