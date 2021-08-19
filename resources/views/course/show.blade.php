@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/courses">Courses</a>
        </li>
        <li class="breadcrumb-item">
            {{ $course->name }}
        </li>
    </ol>
    <h1>
        {{ $course->name }}
    </h1>

    @foreach ($course->lessons as $lesson)
        <a href="{{ route('lesson', $lesson) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
            <div class="card bg-success text-white">
                <div class="card-header">
                    {{ $lesson->title }}
                </div>
                <div class="card-body">
                    {{ $lesson->description }}
                </div>
            </div>
        </a>
    @endforeach


@endsection
