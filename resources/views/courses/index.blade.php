@extends ('layout.app')

@section('title', 'Corsi')

@section('content')
    <h1>Corsi</h1>

    @foreach ($courses as $course)
        {{ $course->title }} <br>
    @endforeach
    
@endsection