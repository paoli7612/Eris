@extends('layouts.app')

@section('content')

    <form action="/courses" method="post">
        @csrf
        <div class="form-group row">
            <input class="form-control col mr-3" type="text" name="title" autofocus required>
            <input class="form-control col-2" type="submit" value="Nuovo corso">
        </div>
    </form>

    @foreach ($courses as $course)
        <a href="{{ $course->route() }}">
            <h3>{{ $course->title }}</h3>
        </a>
    @endforeach

@endsection

