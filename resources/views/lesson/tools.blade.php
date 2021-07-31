<div>
    <div class="card">
        <div class="card-body text-right">
            <a href="{{ route('lesson.edit', $lesson) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </a>
            <a href="{{ route('lesson.remove', $lesson) }}" class="btn btn-primary">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    </div>
</div>