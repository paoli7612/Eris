@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1>{{ $course->title }}</h1>

    @include('course.delete')
    
    {{ $course->description ?? 'Nessuna descrizione' }}

    @include('course.edit')

@endsection