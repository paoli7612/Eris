<li class="nav-item {{ Request::is($active) ? 'active' : '' }}">
    <a class="nav-link" href="{{ route($route) }}">{{ $slot }}</a>
</li>