@extends('layouts.app')

@section('content')

    <div class="margin">
        <h1>{{ $lesson->title }}</h1>
        <x-link.course :course="$lesson->course" />
        <x-link.teacher :teacher="$lesson->teacher" />
        {{ $lesson->description }}
    </div>

@endsection
