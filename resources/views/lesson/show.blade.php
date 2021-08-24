@extends('layouts.app')

@section('title', $lesson->title)

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="/"> Home </x-layout.breadcrum-item>
            <x-layout.breadcrumb-item link="/lessons"> Lessons </x-layout.breadcrum-item>
                <x-layout.breadcrumb-item> {{ $lesson->title }} </x-layout.breadcrum-item>
    </ol>

    <div class="card shadow">
        <div class="card-header ">
            <h2 class="pull-left">
                {{ $lesson->title }}
            </h2>
            <a href="{{ route('course', $lesson->course) }}" class="pull-right">
                {{ $lesson->course->name }}
            </a>
        </div>

        <div class="card-body row">
            <div class="col">
                <x-layout.drop-button id="collapseProf" icon="fa fa-user" title="{{ __('Teachers') }}" />
                @if (auth()->id() == $lesson->user_id)
                    <x-layout.drop-button id="collapseEdit" icon="fa fa-edit" title="{{ __('Edit') }}" />
                @else
                    <x-layout.drop-button id="" icon="fa fa-bookmark" title="{{ __('Save') }}" />
                @endif
            </div>

            <div class="col">
                <x-layout.drop-div id="collapseProf">
                    <h1>{{ __('Teachers') }}</h1>
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{ route('user', $lesson->user) }}">
                                    {{ $lesson->user->complete_name }}
                                </a>
                            </td>
                            <td><img class="rounded-circle" width="50" src="{{ $lesson->user->img }}" alt="avatar"></td>
                        </tr>
                    </table>
                    <x-layout.drop-button id="collapsePartecipate" icon="fa fa-user-plus" title="Add" />
                    <x-layout.drop-div id="collapsePartecipate">
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="s" value="teacher">
                            <select name="user_id" id="usid" class="form-control">
                                @foreach (App\Models\User::all()->where('type', 'teacher') as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->complete_name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-plus"></i>
                            </button>
                        </form>
                        
                    </x-layout.drop-div>
                </x-layout.drop-div>
                <x-layout.drop-div id="collapseEdit">
                    <h1>{{ __('Edit') }}</h1>
                    <form action="{{ route('lesson', $lesson) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="s" value="edit">
                        <div class="form-group">
                            <input type="text" name="title" placeholder="title" class="form-control" value="{{ $lesson->title }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="teacher" class="form-control"
                                value="{{ auth()->user()->complete_name }}" disabled>
                        </div>
                        <div class="form-group">
                            <select name="course_id" class="form-control">
                                @foreach (App\Models\Course::all() as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <x-layout.drop-button id="collapseEdit" title="{{ __('Back') }}" color="warning" />
                            <input type="submit" value="{{ __('Save') }}" class="btn btn-success">
                        </div>
                    </form>
                </x-layout.drop-div>
            </div>

        </div>
    </div>

@endsection
