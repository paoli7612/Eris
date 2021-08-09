<li class="nav-item {{ Request::is("$active") ? 'active' : '' }}">
    <a class="nav-link" href="{{ route($route) }}">
        <i class="{{ $icon }} fa-lg"></i> {{ $title }}
    </a>
</li>