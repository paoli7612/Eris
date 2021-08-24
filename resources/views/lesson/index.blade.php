@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Lessons </x-layout.breadcrumb-item>
    </ol>

    @auth
        @if (auth()->user()->type == 'teacher')
            <x-layout.drop-button id="collapseSearch" icon="fa fa-search" title="{{ __('Search...') }}" />
            <x-layout.drop-button id="collapseNew" icon="fa fa-plus" title="{{ __('New lesson') }}" />
            <x-layout.drop-div id="collapseSearch">
                <form method="GET" class="my-3">
                    <div class="input-group col-6 mx-auto">
                        <input placeholder="{{ __('search..') }}" name="search" type="search" class="form-control"
                            value="{{ request('search') ?? '' }}" />
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </x-layout.drop-div>
            <x-layout.drop-div id="collapseNew">
                <div class="row">
                    <div class="col-12 col-sm-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                {{ __('New lesson') }}
                            </div>
                            <div class="card-body">
                                <form action="{{ route('lesson.new') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">{{ __('Title') }}</label>
                                        <input type="text" name="title" placeholder="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="teacher" class="form-control" value="{{ auth()->user()->complete_name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <select name="course_id" class="form-control">
                                            @foreach (App\Models\Course::all() as $course)
                                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                            @endforeach  
                                        </select>
                                    </div>
                                    <div class="form-group text-right">
                                        <a class="btn btn-danger" href="{{ route('lessons') }}"> {{ __('Back')}} </a>
                                        <input type="submit" value="{{ __('New lesson') }}" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </x-layout.drop-div>

        @endif
    @endauth



    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>
    {{ $lessons->links() }}

@endsection
