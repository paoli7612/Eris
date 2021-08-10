@extends('layouts.app')

@section('content')

    <x-course.large :course="$course" />

    @foreach ($course->lessons as $lesson)
        <x-lesson.medium :lesson="$lesson" />
    @endforeach

@endsection
