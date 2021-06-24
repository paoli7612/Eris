@extends('layouts.app')

@section('content')

    <h3>{{ $teacher->name }}</h3>

    @include('teacher.delete')

@endsection


