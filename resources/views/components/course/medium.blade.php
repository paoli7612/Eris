@props(['course'])

<div class="margin">
    <a href="{{ route('course.show', $course) }}">
        <h1>{{ $course->title }}</h1>
    </a>
</div>