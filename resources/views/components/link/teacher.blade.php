@props(['teacher'])

<a href="{{ route('teacher.show', $teacher) }}" class="text-danger">
    {{ $teacher->name }}
</a>