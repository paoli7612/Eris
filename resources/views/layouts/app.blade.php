<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <title>Apprendiamoci</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @include('layouts.nav')
    <div class="mt-5">
        @yield('content')
    </div>
</body>

</html>
