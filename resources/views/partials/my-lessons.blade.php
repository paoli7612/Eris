<div class="mt-3">
    @if (count($user->lessons))
        <div class="bg-light p-3 shadow">
            <div class="text-center">
                <h1>
                    {{ __('Lessons') }}
                </h1>
            </div>
            <div class="row">
                @foreach ($user->lessons as $lesson)
                    <x-lesson :lesson="$lesson" col="12" />
                @endforeach
            </div>
        </div>
    @else
        <div class="jumbotron m-5 shadow">
            <h1>No lessons created</h1>
            @if ($user->isMe())
                <p class="lead">You didn't created any lessons</p>
                <a href="{{ route('lessons?new') }}">
                    Let's create one
                </a>
            @else
                <p class="lead">This account didn't created any lessons</p>
            @endif
        </div>
    @endif

</div>
