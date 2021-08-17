@extends('layouts.app')

@section('content')
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
