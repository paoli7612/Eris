@extends('layouts.app')

@section('content')

    <h1>{{ $year->id }}</h1>

    <ul>
        @foreach ($year->courses as $course)
            <h4>{{ $course->title }}</h4>
        @endforeach
    </ul>
          

@endsection

