@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item link="{{ route('courses') }}"> Courses </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> {{ $course->name }} </x-layout.breadcrumb-item>
    </ol>

    <h1>
        {{ $course->name }}
    </h1>

    @foreach ($course->lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach


@endsection
