@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            Courses
        </li>
    </ol>

    <div class="row">
        @foreach ($courses as $course)
            <a href="{{ route('course', $course) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
                <div class="card bg-secondary text-white">
                    <div class="card-header">
                        {{ $course->name }}
                    </div>
                    <div class="card-body">
                        {{ $course->description }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
