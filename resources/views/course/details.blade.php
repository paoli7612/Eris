@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1>{{ $course->title }}</h1>

    @include('course.delete')
    
    @include('course.edit')

@endsection