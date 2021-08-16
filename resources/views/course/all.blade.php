@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($courses as $course)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-header">{{ $course->name }}</div>
                <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        @endforeach
    </div>

@endsection
