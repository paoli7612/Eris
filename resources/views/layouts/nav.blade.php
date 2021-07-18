<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="btn text-white {{ Request::is('home') ? 'btn-primary' : '' }} " href="{{ route('home') }}">
        <i class="fas fa-home fa-lg"></i>
    </a>

    <a class="btn text-white ml-3 {{ Request::is('materie') ? 'btn-primary' : '' }}" href="{{ route('materie') }}">
        <i class="fas fa-book fa-lg"></i>
    </a>

    <a class="btn text-white ml-3 {{ Request::is('professori') ? 'btn-primary' : '' }}" href="{{ route('professori') }}">
        <i class="fas fa-users fa-lg"></i>
    </a>

    <a class="btn text-white ml-3 {{ Request::is('lezioni') ? 'btn-primary' : '' }}" href="{{ route('lezioni') }}">
        <i class="fas fa-bookmark fa-lg"></i>
    </a>
</nav>
<div class="container my-3">
    <div class="input-group rounded">
        <input type="text" class="form-control rounded"/>
    </div>
</div>