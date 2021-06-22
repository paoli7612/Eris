@extends('layouts.app')

@section('content')

    <h1>{{ $course->title }}</h1>
    <h3>{{ $course->teacher->name }}</h3>

    <form action="{{ $course->route() }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{ $course->id }}" />
        <select name="teacher_id" class="form-control">
            @foreach (\App\Models\Teacher::all() as $teacher)
                <option value="{{ $teacher->id }}">{{$teacher->name }}</option>
            @endforeach
            <input class="btn btn-primary" type="submit" value="Salva">
        </select>
    </form>

@endsection


