@extends('layouts.app')

@section('content')

    <h1>{{ $course->title }}</h1>
    @if (isset($course->teacher))
        <h3>{{ $course->teacher->name }}</h3>        
    @endif
    @include('course.edit')
        
    @include('course.delete')

@endsection


