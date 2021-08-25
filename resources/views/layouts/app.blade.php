<!doctype html>
<html>
@include('layouts.head')

<body>
    @include('layouts.nav')
    <div class="container mt-5">
        <div class="main-panel" style="min-height: 100vh;">
            <div class="content">
                <script src="{{ asset('js/app.js') }}"></script>
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
