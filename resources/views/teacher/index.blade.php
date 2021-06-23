@extends('layouts.app')

@section('content')

    @auth
        @include('teacher.new')        
    @endauth

    @foreach ($teachers as $teacher)
        <a href="{{ $teacher->route() }}">
            <h3>{{ $teacher->name }}</h3>
        </a>
    @endforeach

@endsection

