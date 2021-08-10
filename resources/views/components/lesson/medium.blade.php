@props(['lesson'])

<div class="margin">
    <a href="{{ route('lesson.show', $lesson) }}">
        <h3>{{ $lesson->title }}</h3>
    </a>
</div>