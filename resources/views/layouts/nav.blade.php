<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-home fa-lg"></i> Home
                    </a>
                </li>
                <li class="nav-item {{ Request::is('teachers') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('teachers') }}">
                        <i class="fas fa-users fa-lg"></i> Teachers
                    </a>
                </li>
                <li class="nav-item {{ Request::is('courses') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('courses') }}">
                        <i class="fas fa-swatchbook fa-lg"></i> Courses
                    </a>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle {{ Request::is('users*') ? 'active' : '' }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('account') }}" class="dropdown-item">{{ __('Account') }}</a>
                            <a href="{{ route('settings') }}" class="dropdown-item">{{ __('Settings') }}</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST"> @csrf
                                <input class="dropdown-item" type="submit" value="{{ __('Logout') }}">
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
