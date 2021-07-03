<div class="card">
    <?php $user = $post->user ?>
    <div class="card-header"> @include('partials.user') </div>

    <div class="card-body">
        <div class="alert alert-success" role="alert">
            {{ $post->body }}
        </div>
        @auth
            <footer>
                <form action="{{ $post->route }}" method="POST">
                    @csrf
                    <input class="btn btn-primary text-white" type="submit" value="Inviami per email">
                </form>
            </footer>
        @endauth
        
    </div>
</div>