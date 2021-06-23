@extends('layouts.app')

@section('content')

    @auth
        @include('course.new')
    @endauth

    <div class="row">
        @foreach ($courses as $course)
        <div class="col-6">
            @include('course.card')
        </div>
        @endforeach
    </div>

@endsection

