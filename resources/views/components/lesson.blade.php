<div>
    <div class="card shadow">
        <div class="card-header">
            {{ $lesson->title }}
            <div class="float-right">
                {{ $lesson->course->title }}
            </div>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="{{ $lesson->route }}">
                <i class="fas fa-user-tie"></i>
            </a>
        </div>
    </div>
</div>