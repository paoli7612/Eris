<!doctype html>
<html>
@include('layouts.head')
<body>
    @include('layouts.nav')
    <div class="container py-3">
        <div class="p-3"></div>
        <div class="p-3"></div>
        @yield('content')
    </div>

</body>

</html>
