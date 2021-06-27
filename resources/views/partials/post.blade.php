<div class="row" onclick="window.location='{{ $post->route }}'">
    <div class="col-1 mr-2">
        <img src="{{ $post->user->avatar }}" alt="avatar" width="70px" class="rounded-circle">
    </div>
    <div class="col">
        <a href="{{ $post->user->route }}">
            <h5 class="font-normal">{{ $post->user->name }}</h5>
        </a>
        <p>
            {{ $post->body }}
        </p>
    </div>
</div>
<div class="border my-4"></div>