@extends('layouts.app')

@section('content')
    @foreach ($lessons as $lesson)
        <div class="col-12 col-sm-6 my-3">
            <x-lesson :lesson=$lesson></x-lesson>
        </div>
    @endforeach
@endsection
