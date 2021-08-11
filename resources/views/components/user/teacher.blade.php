@props(['teacher'])

<div class="margin">

    <a href="{{ route('teacher.show', $teacher) }}">
        {{ $teacher->name }}
    </a>

</div>
