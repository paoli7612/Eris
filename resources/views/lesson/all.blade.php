@extends('layouts.app')

@section('content')
    @foreach ($lessons as $lesson)
        {{ $lesson->title }}
    @endforeach
@endsection
