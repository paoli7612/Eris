<div class="card m-3" onclick="window.location='{{$course->route()}}'">
    <div class="card-header">
        {{ $course->title }}
        <span> {{ $course->year_id }} </span>
    </div>
    <div class="card-body">
        @if ($course->teacher)
            <a href="{{ $course->teacher->route() }}">{{ $course->teacher->name }}</a>                    
        @endif
    </div>
</div>