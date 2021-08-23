@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Courses </x-layout.breadcrumb-item>
    </ol>

    <div class="row">
        @foreach ($courses as $course)
            <x-course :course="$course" />
        @endforeach
    </div>

@endsection
