@php
    function icon($name, $other = '')
    { echo '<i class="fas fa-' . $name . ' ' . $other . '"></i>'; }
@endphp
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
                        {{ icon('users', 'lg') }} Teachers
                    </a>
                </li>
                <li class="nav-item {{ Request::is('courses') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('courses') }}">
                        {{ icon('swatchbook', 'lg') }} Courses
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle {{ Request::is('users*') ? 'active' : '' }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ _('Lessons') }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                        <a href="{{ route('all-lessons') }}" class="dropdown-item">
                            {{ icon('book', 'mr-2') }}
                            {{ __('All lessons') }}    
                        </a>
                        <a href="{{ route('new-lesson') }}" class="dropdown-item">
                            {{ icon('bookmark', 'mr-2') }}
                            {{ __('Saved lessons') }}    
                        </a>

                        @if (auth()->user()->type == 'teacher')
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('new-lesson') }}" class="dropdown-item">
                                {{ icon('plus', 'mr-2') }}
                                {{ __('New lesson') }}    
                            </a>
                        @endif
                    </div>
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
                            <a href="{{ route('account') }}" class="dropdown-item">
                                @if (Auth::user()->type == 'teacher')
                                    {{ icon('user-graduate', 'mr-2') }}
                                @else
                                    {{ icon('user', 'mr-2') }}
                                @endif
                                {{ __('Account') }}
                            </a>
                            <a href="{{ route('settings') }}" class="dropdown-item">
                                {{ icon('cog', 'mr-2') }}
                                {{ __('Settings') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST"> @csrf
                                <button class="dropdown-item" type="submit">
                                    {{ icon('sign-out-alt', 'mr-2') }}
                                    {{ __('Logout') }}
                                </form>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
