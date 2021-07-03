<div class="card">
    <div class="card-header">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button class="input-group-text border-0 btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        @foreach (\App\Models\User::all() as $user)
            <div class="p-3">
                <div class="float-right card-body">
                    <div class="row">
                        <div class="col">
                            <form class="form-inline" action="">
                                @csrf
                                <a class="btn btn-primary" href="{{ $user->route }}">
                                    <i class="fa fa-user"></i>
                                </a>
                            </form>
                        </div>
                        <div class="col">
                            <form class="form-inline" action="{{ $user->route }}" method="post">
                                @csrf
                                <button class="btn btn-success" href="">
                                    <i class="fa fa-user-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
                <h1>{{ $user->name }}</h1>
                <h4 class="text-muted">
                    {{ $user->email }}    
                </h4>            
            </div>
        @endforeach
    </div>
</div>