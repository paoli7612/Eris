@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        {{ $lesson->title }}
                    </div>
                    <div class="card-body description">
                        {{ $lesson->description ?? 'No description'}}
                    </div>
                    <div class="card-footer small ">
                        <a class="pull-left" href="{{ route('course', $lesson->course) }}">
                            {{ $lesson->course->name }}
                        </a>
                        <a href="{{ route('user', $lesson->user) }}" class="pull-right">
                            {{ $lesson->user->name }}
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="card card-stats py-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category mb-3">{{ $lesson->course->name }}</p>
                                </div>
                                <p class="m-0 item-center">{{ $lesson->title }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
