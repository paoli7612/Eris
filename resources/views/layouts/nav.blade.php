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
                
                <x-nav-item active="home" title="Home" icon="fas fa-home" route="home"/>
                <x-nav-item active="teachers*" title="Teachers" icon="fas fa-users" route="teachers"/>
                <x-nav-item active="courses*" title="Courses" icon="fas fa-swatchbook" route="courses"/>
                <x-nav-drop active="lessons*" title="Lessons" icon="fas fa-book">
                    <x-nav-drop-item title="All lessons" icon="fas fa-book" route="all-lessons" />
                    <x-nav-drop-item title="My lessons" icon="fas fa-book" route="my-lessons" />
                    @if (auth()->user()->type='teacher')
                        <div class="dropdown-divider"></div>
                        <x-nav-drop-item title="New lesson" icon="fas fa-plus" route="new-lesson" />
                    @endif
                </x-nav-drop>
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
                            {{ icon('user', 'mr-2') }}
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
