@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Lessons </x-layout.breadcrumb-item>
    </ol>

    @auth
        @if (auth()->user()->type == 'teacher')
            <x-layout.tools-item link="{{ route('lesson.new') }}" icon="fa fa-plus" title="{{ __('New lesson') }}" />
        @endif
    @endauth

    <form method="GET" class="my-3">
        <div class="input-group col-6 mx-auto">
            <input placeholder="{{ __('search..') }}" name="search" type="search" class="form-control" value="{{ request('search') ?? '' }}" />
            <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>
    {{ $lessons->links() }}

@endsection
