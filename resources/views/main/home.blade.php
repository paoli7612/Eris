@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-11">
                <div class="row">
                    @foreach ($lessons as $lesson)
                        <x-lesson :lesson="$lesson" />
                    @endforeach
                </div>
            </div>

            <div class="col-1">
                <a href="{{ route('lessons') }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-header">
                            <i class="fa fa-arrow-right"></i> ...
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <a href="{{ route('courses') }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="card bg-secondary text-white">
                        <div class="card-header">
                            <i class="fa fa-arrow-left"></i> ...
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-11 row">
                @foreach ($courses as $course)
                    <x-course :course="$course" />
                @endforeach
            </div>
            

        </div>
    </div>

@endsection
