@extends('layouts.app')

@section('content')

    @foreach ($teachers as $teacher)
        <x-user.teacher :teacher="$teacher" />
    @endforeach
@endsection
