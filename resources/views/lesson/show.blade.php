@extends('layouts.app')

@section('content')
    <h1>{{ $lesson->title }} </h1>
    <h3 class="text-muted">{{ $lesson->course->title }}</h3>

    @include('lesson.tools')

@endsection
