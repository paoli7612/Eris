<div class="bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand navbar-light nav-lg h3">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/')) active @endif" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Search</a>
                    </li>
                </ul>
                <form class="d-flex navbar-nav">
                    @auth 
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('account', auth()->user()) }}">Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </div> 
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success mx-3" type="submit">Sing in</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-success" type="submit">Sing up</a>
                    @endauth
                    
                </form>

            </div>
        </nav>
    </div>
</div>
