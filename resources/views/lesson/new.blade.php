@extends('layouts.app')

@section('title', __('New lesson'))

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item link="{{ route('lessons') }}"> Lessons </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> {{ __('New lesson') }} </x-layout.breadcrumb-item>
    </ol>

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

@endsection
