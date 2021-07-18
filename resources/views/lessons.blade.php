@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ce3rca</h1>
    </div>

    <div class="row m-3">
        @foreach ($lessons as $lesson)
            @include('partials.lesson-sm')
        @endforeach
    </div>
@endsection
