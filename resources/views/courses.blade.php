@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
    <div class="my-3">

        <div class="card">
            <div class="card-header">
                <a href="{{ $course->route }}">{{ $course->title }} </a>
            </div>
            <div class="card-body">
                @foreach ($course->lessons as $lesson)
                    {{ $lesson->title }}
                @endforeach
            </div>
        </div>
    </div>

    @endforeach
@endsection
