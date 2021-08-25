@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item>Lessons</x-bc-item>
    </x-bc>

    <div class="row">
        <div class="col-6 mb-3">
            <div class="input-group mb-3">
                <form method="GET">
                    <input placeholder="{{ __('search..') }}" name="search" type="search" class="form-control"
                        value="{{ request('search') ?? '' }}" />
                    <button type="submit" class="btn btn-info text-white">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            @auth @if (auth()->user()->type == 'teacher')
                <x-dd-button iid="bnew" id="collapseNew" icon="fa fa-plus" title="{{ __('New lesson') }}" />
                <x-dd-button id="collapsePartecipate" icon="fa fa-user-plus" title="{{ __('Partecipate') }}" />
            @endif @endauth
        </div>
        @auth @if (auth()->user()->type == 'teacher')
            <div class="col">
                <x-dd-div id="collapseNew">
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
                                <x-dd-button id="collapseNew" icon="fa fa-plus" title="{{ __('Back') }}"
                                    color="warning" />
                                <input type="submit" value="{{ __('New lesson') }}" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </x-dd-div>
                <x-dd-div id="collapsePartecipate">
                    <div class="p-3 bg-white shadow">
                        {{ __('Partecipate') }}
                        <div class="alert alert-danger" role="alert">
                            Work in pregress!
                        </div>
                    </div>
                </x-dd-div>
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
