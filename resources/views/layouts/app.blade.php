<!doctype html>
<html>
    <head>
        <title>Eris - @yield('title')</title>
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="bg-dark p-3 text-center fixed-top">
            <x-layout.navbar-item active="/" link="{{ route('home') }}" title="Home" icon="fa fa-home fa-lg" color="{{ config('app.colors.home') }}"/> 
            <x-layout.navbar-item active="courses*" link="{{ route('courses') }}" title="Courses" icon="fa fa-archive fa-lg" color="{{ config('app.colors.courses') }}"/> 
            <x-layout.navbar-item active="teachers*" link="{{ route('teachers') }}" title="Teachers" icon="fa fa-users fa-lg" color="{{ config('app.colors.teachers') }}"/> 
            <x-layout.navbar-item active="lessons*" link="{{ route('lessons') }}" title="Lessons" icon="fa fa-book fa-lg" color="{{ config('app.colors.lessons') }}"/>
            @auth
                <x-layout.navbar-item active="account*" link="{{ route('account') }}" title="Account" icon="fa fa-user fa-lg" color="{{ config('app.colors.account') }}"/> 
            @else
                <x-layout.navbar-item active="account*" link="{{ route('login') }}" title="Sing-in" icon="fa fa-user fa-lg" color="{{ config('app.colors.account') }}"/> 
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
                                @yield('content')
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
