<div class="row">
    <div class="col">
        <img src="https://www.gravatar.com/avatar/?s=200&d=mp" />
    </div>
    <div class="col">
        <h1>{{ $user->complete_name }}</h1>
        <h4>{{ $user->type }}</h4>
    </div>
</div>

<div class="row mt-3">
    @foreach ($user->lessons as $lesson)
        @include('partials.lesson-sm')
    @endforeach
</div>
