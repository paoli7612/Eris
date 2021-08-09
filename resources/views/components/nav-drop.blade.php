@props(['icon', 'title', 'active'])
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle {{ Request::is("$active") ? 'active' : '' }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="{{ $icon }} fa-lg"></i>
        {{ $title }}
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
       {{ $slot }}
    </div>
</li>