@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-xl-4 col-md-6 col-sm-12 mb-3">
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


        @endforeach
    </div>


@endsection
