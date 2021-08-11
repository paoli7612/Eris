@extends('layouts.app')

@section('content')

    <h1 class="text-right"> {{ $course->title }}</h1>


    @foreach ($course->lessons as $lesson)
        <x-lesson.medium :lesson="$lesson" />
    @endforeach

@endsection
