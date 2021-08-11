@extends('layouts.app')

@section('content')

    <div class="margin">
        <h1>{{ $teacher->name }}</h1>
    </div>

    @foreach ($teacher->lessons as $lesson)
        <x-lesson.medium :lesson="$lesson" />
    @endforeach

@endsection
