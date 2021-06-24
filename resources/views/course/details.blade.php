@extends('layouts.app')

@section('content')

    <h1>{{ $course->title }}</h1>

    @include('course.add_teacher')

    @include('course.edit')
        
    @include('course.delete')

@endsection


