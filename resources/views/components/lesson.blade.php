@props(['lesson', 'col', 'llink'])
<div class="{{ isset($col) ? "col-$col" : 'col-xl-4 col-md-6 col-sm-12' }} mb-3" style="text-decoration: none">
    <div class="card bg-success text-white">
        <div class="card-header">
            {{ $lesson->title }}
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" title="{{ $lesson->course->name }}">
                {{ $lesson->course->name }}
                {!! Icons::i('courses') !!}
            </a>
            <a class="btn btn-danger" title="{{ $lesson->user->complete_name }}">
                {{ $lesson->user->surname }}
                {!! Icons::i('teacher') !!}
            </a>
            <a href="{{ route('lesson', $lesson) }}{{ $llink ?? '' }}" class="btn btn-light float-right" title="show">
                ...
            </a>
        </div>
    </div>
</div>