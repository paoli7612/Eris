@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Lessons </x-layout.breadcrumb-item>
    </ol>
    @if (auth()->user()->type == 'teacher')
        <x-layout.tools-item link="{{ route('lesson.new') }}" icon="fa fa-plus" title="{{ __('New lesson') }}"/>
    @endif

    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>
    {{ $lessons->links() }}

@endsection
