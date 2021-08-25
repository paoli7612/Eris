@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}"> Home </x-bc-item>
        <x-bc-item> Courses </x-bc-item>
    </x-bc>

    <div class="row">
        @foreach ($courses as $course)
            <x-course :course="$course" />
        @endforeach
    </div>

@endsection
