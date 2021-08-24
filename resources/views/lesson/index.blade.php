@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Lessons </x-layout.breadcrumb-item>
    </ol>

    @auth
        @if (auth()->user()->type == 'teacher')
            <x-layout.drop-button id="collapseExample" icon="fa fa-search" title="{{ __('Search...') }}" color="info"/>
            <x-layout.tools-item link="{{ route('lesson.new') }}" icon="fa fa-plus" title="{{ __('New lesson') }}" color="info" />

            <x-layout.drop-div id="collapseExample" />

        @endif
    @endauth



    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>
    {{ $lessons->links() }}

@endsection
