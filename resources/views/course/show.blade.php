@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card bg-secondary text-white">
            <div class="card-header">
                {{ $course->name }}
            </div>
            <div class="card-body">
                {{ $course->description }}
            </div>
            <a class="card-footer text-right text-white" href="{{ route('course', $course) }}">
                Details
                <i class="ml-3 fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
@endsection
