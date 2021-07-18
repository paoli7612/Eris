<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <title>Apprendiamoci</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <script src="{{ URL::to('js/app.js') }}" defer></script>
</head>

<body>
    @include('layouts.nav')
    <div class="mt-3">
        @yield('content')
    </div>
</body>

</html>
