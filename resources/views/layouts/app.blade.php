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
        <section class="px-8 py-4">
            <header class="container mx-auto row">
                <div class="col">
                    @include('layouts.nav.button', ['arg'=>'Home'])
                    @include('layouts.nav.button', ['arg'=>'Friends'])
                    @include('layouts.nav.button', ['arg'=>'Account'])
                    @include('layouts.nav.button', ['arg'=>'My posts'])
                </div>
                

                <div class="col-md-auto float-right pull-right">
                    @if (Auth::check())
                        <form action="{{ url('/logout') }}" method="post" class="form-inline">
                            @csrf
                            <button class="btn btn-primary mx-2" type="submit">Disconnetti</button>
                        </form>    
                    @else
                        <a class="btn btn-primary mx-2" href="register">Registrati</a>
                    @endif
                </div>
                
            </header>
        </section>
        
        <section class="px-8">
        
            <main class="container mx-auto">
                @yield('content')
            </main>
            
        </section>

    </body>
</html>
