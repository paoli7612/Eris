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
                        <span class="pull-right">
                            <i class="fa fa-book"></i>
                            {{ count($course->lessons) }}
                        </span>
                    </div>
                    <div class="card-body">
                        @foreach ($course->users as $user)
                            <x-user :user="$user" />                            
                        @endforeach
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
