<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link @if (Request::is('home')) active @endif" href="{{ route('home') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Request::is('search')) active @endif" href="{{ route('search') }}">{{ __('Search') }}</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle @if (Request::is('account', 'settings')) active @endif"
                        href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('account') }}">
                            {{ __('Account') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('settings') }}">
                            {{ __('Settings') }}
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                
            @endguest
        </ul>
    </div>
</nav>