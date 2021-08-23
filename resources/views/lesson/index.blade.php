@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            Lessons
        </li>
    </ol>

    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>
    {{ $lessons->links() }}

@endsection
