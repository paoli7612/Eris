@props(['course'])

<a href="{{ route('course.show', $course) }}" class="text-danger">
    {{ $course->title }}
</a>