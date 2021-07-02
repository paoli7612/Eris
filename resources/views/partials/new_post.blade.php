<div class="card">
    <div class="card-header">
        Nuovo post
    </div>
    <div class="card-body">
        <form action="/posts" method="POST">
        @csrf
            <div class="form-group">
                <textarea name="body" class="form-control" maxlength="500"></textarea>
            </div>
            <button class="btn btn-success mt-3 text-white w-100" type="submit">Nuovo post</button>
        </form>
    </div>
</div>
