@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1 class="float-right">{{ $course->title }}</h1>

    @include('course.options')

    {{ $course->description ?? 'Nessuna descrizione' }}


@endsection