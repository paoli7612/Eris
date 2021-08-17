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
    <div class="row">
        <div class="col">
            <div class="card bg-secondary">
                <h2 class="card-header text-white">
                    {{ $course->name }}
                </h2>
                <div class="card-body">
                    
                    @foreach ($course->lessons as $lesson)
                        {{ $lesson->title }}
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
