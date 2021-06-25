<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body class="bg-white">
        <div id="app">
            <section class="px-8 py-4">
                <header class="container mx-auto">
                    <a href="/">
                        <h1>
                            <img src="/images/logo.png" alt="logo" width="70px">
                            Eris
                        </h1>
                    </a>
                    @if (! Auth::check())
                        <a href="/register">Registrati</a>
                    @endif
                </header>
            </section>
            
            <section class="px-8">
            
                <main class="container mx-auto">
                    @yield('content')
                </main>
                
            </section>

        </div>
    </body>
</html>
