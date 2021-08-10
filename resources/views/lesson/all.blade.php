@extends('layouts.app')

@section('content')

    @foreach ($lessons as $lesson)
        <x-lesson.medium :lesson="$lesson" />
    @endforeach

@endsection
