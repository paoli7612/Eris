<div class="row">
    <div class="col-1 mr-2">
        <img src="{{ $post->user->avatar }}" alt="avatar" width="70px" class="rounded-circle">
    </div>
    <div class="col">
        <h5>{{ $post->user->name }}</h5>
        <p>
            {{ $post->body }}
        </p>
    </div>
</div>
<div class="border my-4"></div>