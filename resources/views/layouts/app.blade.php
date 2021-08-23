<!doctype html>
<html>
    <head>
        <title>Eris - @yield('title')</title>
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="bg-dark p-3 text-center fixed-top">
            <x-layout.navbar-item active="/" link="{{ route('home') }}" title="Home" icon="fa fa-home fa-lg"/> 
            <x-layout.navbar-item active="courses*" link="{{ route('courses') }}" title="Courses" icon="fa fa-archive fa-lg"/> 
            <x-layout.navbar-item active="teachers*" link="{{ route('teachers') }}" title="Teachers" icon="fa fa-users fa-lg"/> 
            <x-layout.navbar-item active="lessons*" link="{{ route('lessons') }}" title="Lessons" icon="fa fa-book fa-lg"/>
            <x-layout.navbar-item active="account*" link="{{ route('account') }}" title="Account" icon="fa fa-user fa-lg"/> 
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
    </body>
</html>
