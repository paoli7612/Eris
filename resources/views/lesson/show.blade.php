@extends('layouts.app')

@section('title', $lesson->title)

@section('content')
    <script src="{{ asset('js/helper.js') }}"></script>
    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item link="{{ route('lessons') }}">Lessons</x-bc-item>
        <x-bc-item> {{ $lesson->title }} </x-bc-item>
    </x-bc>

    <div class="card shadow">
        <div class="card-header">
            <h2 class="pull-left">
                {{ $lesson->title }}
            </h2>
            <a href="{{ route('course', $lesson->course) }}" class="pull-right">
                {{ $lesson->course->name }}
            </a>
        </div>

        <div class="card-body row" id="accordion">
            <div class="col">
                <x-dd-button id="collapseProf" icon="fa fa-user" title="{{ __('Teacher') }}" />
                @if (auth()->id() == $lesson->user_id)
                    <x-dd-button id="collapseEdit" icon="fa fa-edit" title="{{ __('Edit') }}" />
                    <x-dd-button iid="badd" id="collapseAdd" icon="fa fa-plus" title="{{ __('Add material') }}" />
                    <x-dd-button iid="brem" id="collapseRem" icon="fa fa-trash" title="{{ __('Delete lesson') }}" />
                @else
                    <x-dd-button id="" icon="fa fa-bookmark" title="{{ __('Save') }}" />
                @endif
            </div>

            <div class="col" id="accordion">
                <x-dd-div id="collapseProf">
                    <h1>{{ __('Teacher') }}</h1>
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{ route('teacher', $lesson->user) }}">
                                    {{ $lesson->user->complete_name }}
                                </a>
                            </td>
                            <td><img class="rounded-circle" width="50" src="{{ $lesson->user->img }}" alt="avatar"></td>
                        </tr>
                    </table>
                    <x-dd-div id="collapsePartecipate">
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

                    </x-dd-div>
                </x-dd-div>
                @if (auth()->id() == $lesson->user_id)
                    <x-dd-div id="collapseAdd">
                        <h1>{{ __('Add') }}</h1>
                        <div class="p-3 rounded bg-danger">
                            Work in progress
                        </div>
                    </x-dd-div>
                    <x-dd-div id="collapseEdit">
                        <h1>{{ __('Edit') }}</h1>
                        <form action="{{ route('lesson', $lesson) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="s" value="edit">
                            <div class="form-group">
                                <input type="text" onkeyup="$('#slug')[0].value = string_to_slug(this.value)" name="title"
                                    placeholder="title" class="form-control" value="{{ $lesson->title }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="slug" name="slug" class="form-control bg-grey" value="{{ $lesson->slug }}"
                                    readonly>
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
                            <div class="form-group">
                                <textarea name="description" class="form-control">{{ $lesson->description }}</textarea>
                            </div>
                            <div class="form-group text-right">
                                <x-dd-button id="collapseEdit" title="{{ __('Back') }}" />
                                <input type="submit" value="{{ __('Save') }}" class="btn btn-success">
                            </div>
                        </form>
                    </x-dd-div>
                    <x-dd-div id="collapseRem">
                        <x-q title="{{ __('Remove lesson') }}"
                            ask="Are your sure to delete this lesson?"
                            action="{{ route('lesson.delete', $lesson) }}"
                            method="DELETE"
                            col="12"/>
                    </x-dd-div>
                @endif
            </div>
        </div>
    </div>
@endsection
