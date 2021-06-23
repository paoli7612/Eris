@extends('layouts.app')

@section('content')

    <h1>{{ $course->title }}</h1>
    @if (isset($course->teacher))
        <h3>{{ $course->teacher->name }}</h3>        
    @endif
    @include('course.edit')
        
    <form action="{{ $course->route('id') }}" method="post">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Elimina corso">
    </form>

@endsection


