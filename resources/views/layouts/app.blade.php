<!doctype html>
<html>
@include('layouts.head')

<body>
    @include('layouts.nav')
    <div class="container mt-5 py-3">
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('content')
    </div>

</body>

</html>
