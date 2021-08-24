@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="{{ route('home') }}"> Home </x-layout.breadcrumb-item>
        <x-layout.breadcrumb-item> Lessons </x-layout.breadcrumb-item>
    </ol>

    <div class="row">
        <div class="col-6 mb-3">
            <div class="input-group mb-3">
                <input placeholder="{{ __('search..') }}" name="search" type="search" class="form-control"
                    value="{{ request('search') ?? '' }}" />
                <button type="button" class="btn btn-info text-white">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            @auth @if (auth()->user()->type == 'teacher')
                <x-layout.drop-button iid="bnew" id="collapseNew" icon="fa fa-plus" title="{{ __('New lesson') }}" />
                <x-layout.drop-button id="collapsePartecipate" icon="fa fa-user-plus" title="{{ __('Partecipate') }}" />
            @endif @endauth
        </div>
        @auth @if (auth()->user()->type == 'teacher')
            <div class="col">
                <x-layout.drop-div id="collapseNew">
                    <div class="p-3 bg-white shadow">
                        {{ __('New lesson') }}
                        <form action="{{ route('lesson.new') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <p class="small pull-right">{{ __('Title') }}</p>
                                <input type="text" onkeyup="$('#slug')[0].value = string_to_slug(this.value)" name="title"
                                    placeholder="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <p class="small">{{ __('Slug') }}</p>
                                <input type="text" id="slug" name="slug" placeholder="slug" class="form-control bg-grey"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" name="teacher" class="form-control"
                                    value="{{ auth()->user()->complete_name }}" disabled>
                            </div>
                            <script>
                                function string_to_slug(str) {
                                    str = str.replace(/^\s+|\s+$/g, ''); // trim
                                    str = str.toLowerCase();

                                    // remove accents, swap ñ for n, etc
                                    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                                    var to = "aaaaeeeeiiiioooouuuunc------";
                                    for (var i = 0, l = from.length; i < l; i++) {
                                        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                                    }

                                    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                                        .replace(/\s+/g, '-') // collapse whitespace and replace by -
                                        .replace(/-+/g, '-'); // collapse dashes

                                    return str;
                                }
                            </script>
                            <div class="form-group">
                                <select name="course_id" class="form-control">
                                    @foreach (App\Models\Course::all() as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-right">
                                <x-layout.drop-button id="collapseNew" icon="fa fa-plus" title="{{ __('Back') }}" color="warning" />
                                <input type="submit" value="{{ __('New lesson') }}" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </x-layout.drop-div>
                <x-layout.drop-div id="collapsePartecipate">
                    <div class="p-3 bg-white shadow">
                        {{ __('Partecipate') }}
                        <div class="alert alert-danger" role="alert">
                            Work in pregress!
                        </div>
                    </div>
                </x-layout.drop-div>
            </div>
        @endif @endauth
    </div>


    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>


    {{ $lessons->links() }}

    @if ($new)
        <script>
            $(document).ready(function() {
                $('#bnew').click()
            });
        </script>
    @endif

@endsection
