@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>{{ $lesson->title }} </h1>
            <h3 class="text-muted">{{ $lesson->course->title }}</h3>
        </div>
        <div class="col text-right">
            <a href="{{ route('lesson.edit', $lesson) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </a>
            <a href="{{ route('lesson.remove', $lesson) }}" class="btn btn-primary">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    </div>
@endsection
