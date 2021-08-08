@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($teachers as $teacher)
            <div class="col-12 col-sm-6 my-3">
                <x-teacher :teacher=$teacher></x-teacher>
            </div>
        @endforeach
    </div>

@endsection
