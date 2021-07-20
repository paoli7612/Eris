<div class="row">
    <div class="col">
        <img src="https://www.gravatar.com/avatar/?s=200&d=mp" />
    </div>
    <div class="col">
        <h1>{{ $user->complete_name }}</h1>
        <h4>{{ $user->type }}</h4>
    </div>
</div>

@if (auth()->user()->id == $user->id)
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">
            Disconnetti <i class="fas fa-sign-out-alt"></i>
        </button>
    </form>
@endif

<div class="row mt-3">
    @foreach ($user->lessons as $lesson)
        @include('partials.lesson-sm')
    @endforeach
</div>
