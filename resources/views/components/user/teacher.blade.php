@props(['teacher'])

<div class="margin">

    <a href="{{ route('teacher.show', $teacher) }}">
        {{ $teacher->name }}
    </a>
    <img src="https://i.pravatar.cc/32?{{ $teacher->email }}" alt="">

</div>
