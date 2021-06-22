@extends('layouts.app')

@section('content')

    <form action="teachers" method="post">
        @csrf

        <div class="form-group row">
            <input class="form-control col mr-3" type="text" name="name">
            <input class="form-control col-2" type="submit" value="Nuovo insegnante">
        </div>
    </form>

    @foreach ($courses as $course)

        <a href="/courses/{{ $course->slug }}">
            <h1>{{ $course->title }}</h1>
        </a>

        <a href="teachers/{{ $course->teacher->slug }}">
            <h3>{{ $course->teacher->name }}</h3>
        </a>
    
    @endforeach

@endsection

