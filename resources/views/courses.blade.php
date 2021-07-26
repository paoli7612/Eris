@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
    <div class="my-3">

        <div class="card">
            <div class="card-header">
                <a href="{{ $course->route }}">{{ $course->title }} </a>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>

    @endforeach
@endsection
