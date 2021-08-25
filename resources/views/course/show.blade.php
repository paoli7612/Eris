@extends('layouts.app')

@section('title', $course->name)

@section('content')
    <x-tt name="courses">
        {{ $course->name }}
    </x-tt>

    <x-bc>
        <x-bc-item link="{{ route('home') }}"> Home </x-bc-item>
        <x-bc-item link="{{ route('courses') }}"> Courses </x-bc-item>
        <x-bc-item> {{ $course->name }} </x-bc-item>
        
    </x-bc>


    @foreach ($course->lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach


@endsection
