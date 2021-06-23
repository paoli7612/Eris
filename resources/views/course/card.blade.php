<div class="btn-success card m-3" onclick="window.location='{{$course->route()}}'">
    <div class="card-header">
        {{ $course->title }}
    </div>
    <div class="card-body">
        <a href="{{ $course->teacher->route() }}">{{ $course->teacher->name }}</a>        
    </div>
</div>