@extends('layouts.app')

@section('content')
    @foreach ($teachers as $teacher)
    <h1>
        {{ $teacher->complete_name }}
    </h1>
    @endforeach
@endsection
