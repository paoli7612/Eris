<div class="card m-3">
    <div class="card-header">
        <a href="{{ $course->route() }}">
            {{ $course->title }}
        </a>
        <a href="{{ $course->year->route() }}">
            <span class="float-right small"> {{ $course->year->title }} </span>
        </a>
    </div>
    <div class="card-body">
        <a href="{{ $course->teacher->route() }}">{{ $course->teacher->name }}</a>                    
    </div>
</div>