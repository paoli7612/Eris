@extends('layouts.app')

@section('content')

    @foreach ($courses as $course)
        <x-course.medium :course="$course" />
    @endforeach

@endsection
