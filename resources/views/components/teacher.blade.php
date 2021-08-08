<div>
    <div class="card shadow">
        <div class="card-header">
            {{ $teacher->complete_name }}
            <div class="float-right">
                {!! $teacher->avatar(50) !!}
            </div>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="{{ $teacher->route }}">
                <i class="fas fa-user-tie"></i>
            </a>
            <a class="btn btn-primary" href="{{ $teacher->route }}">
                <i class="far fa-bookmark"></i>
                <i class="fas fa-bookmark"></i>
            </a>
        </div>
    </div>
</div>