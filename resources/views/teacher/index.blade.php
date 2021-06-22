@extends('layouts.app')

@section('content')

    <form action="/teachers" method="post">
        @csrf
        <div class="form-group row">
            <input class="form-control col mr-3" type="text" name="name" autofocus required>
            <input class="form-control col-2" type="submit" value="Nuovo insegnante">
        </div>
    </form>

    @foreach ($teachers as $teacher)
        <a href="{{ $teacher->route() }}">
            <h3>{{ $teacher->name }}</h3>
        </a>
    @endforeach

@endsection

