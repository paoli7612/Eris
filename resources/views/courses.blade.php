@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
    <div class="my-3">

        <div class="card">
            <div class="card-header">
                <a href="{{ $course->route }}">{{ $course->title }} </a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($course->lessons as $lesson)
                        <a href="{{ $lesson->route }}" class="btn btn-outline-danger mx-2"> {{ $lesson->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endforeach
@endsection
