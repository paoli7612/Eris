<!doctype html>
<html>
    <head>
        <title>Eris - @yield('title')</title>
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="bg-dark p-3 text-center fixed-top">
            <x-layout.navbar-item name="home"/> 
            <x-layout.navbar-item name="courses"/> 
            <x-layout.navbar-item name="teachers"/> 
            <x-layout.navbar-item name="lessons"/>
            @auth
                <x-layout.navbar-item name="account"/> 
            @else
                <x-layout.navbar-item name="account"/> 
            @endauth
        </div>
        <br>
        <br>
        <div class="container mt-5">
            <div class="main-panel" style="min-height: 100vh;">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="description">
        <script src="{{ asset('js/app.js') }}"></script>

                                @yield('content')
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
