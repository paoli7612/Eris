<div class="row">
    <div class="col-1 mr-2">
        <img src="https://i.pravatar.cc/50?u={{ $post->user->email }}" alt="" class="rounded-circle">
    </div>
    <div class="col">
        <h5>{{ $post->user->name }}</h5>
        <p>
            {{ $post->body }}
        </p>
    </div>
</div>
<div class="border my-4"></div>