@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
        <a href="{{ $course->route }}" class="btn btn-success">{{ $course->title }}</a>
    @endforeach
@endsection
