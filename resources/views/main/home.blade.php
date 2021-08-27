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
                        {{ $lesson->description ?? 'No description' }}
                    </div>
                    <div class="card-footer small ">
                        <a class="pull-left" href="{{ route('course', $lesson->course) }}">
                            {{ $lesson->course->name }}
                        </a>
                        <a href="{{ route('teacher', $lesson->user) }}" class="pull-right">
                            {{ $lesson->user->name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endsection
