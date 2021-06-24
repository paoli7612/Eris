@extends('layouts.app')

@section('content')

    @auth
        <a class="btn btn-success float-right" data-toggle="collapse" href="#new" role="button" aria-expanded="false" aria-controls="new">
            <i class="fa fa-user-plus"></i>
        </a>
        <div class="collapse" id="new">
            <div class="col-xl-5">
                @include('course.new')
            </div>
        </div>
    @endauth

    <div class="row">
        @foreach ($courses as $course)
        <div class="col-6">
            @include('course.card')
        </div>
        @endforeach
    </div>

@endsection

