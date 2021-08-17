@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/lessons">Lessons</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('lesson', $lesson) }}">{{ $lesson->title }}</a>
        </li>
        <li class="breadcrumb-item">
            Settings
        </li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card bg-secondary">
                <div class="card-header text-white">
                    <h2 class="pull-left">
                        {{ $lesson->title }}
                    </h2>
                </div>
                
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

@endsection
