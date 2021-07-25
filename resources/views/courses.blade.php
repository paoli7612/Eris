@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
        {{ $course->title }}
    @endforeach
@endsection
