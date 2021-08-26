@extends('layouts.app')

@section('title', 'Lessons')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item>Lessons</x-bc-item>
    </x-bc>

    <div class="row">
        <form method="GET" class="mb-3 col-12 col-sm-6 mx-auto">
            <div class="input-group">
                <input placeholder="{{ __('search...') }}" name="search" type="search" class="form-control"
                    value="{{ request('search') ?? '' }}" />
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-6 mb-3">
            @auth @if (auth()->user()->type == 'teacher')
                <x-dd-button iid="bnew" id="collapseNew" icon="fa fa-plus" title="{{ __('New lesson') }}" />
                <x-dd-button id="collapsePartecipate" icon="fa fa-user-plus" title="{{ __('Partecipate') }}" />
            @endif @endauth
            <x-dd-button iid="basearch" id="collapseASearch" icon="fa fa-search"  title="{{ __('Advanced Search') }}" />
        </div>
        <div class="col">
            @auth @if (auth()->user()->type == 'teacher')
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
            @endif @endauth
                <x-dd-div id="collapseASearch">
                    <div class="p-3 bg-white shadow">
                        {{ __('Advanced Search') }}
                        <form method="GET">
                            <div class="form-group">
                                <p class="small pull-right mb-0">{{ __('Title') }}</p>
                                <input type="text" name="title" placeholder="Title" class="form-control" value="{{ request('title') }}">
                            </div>
                            <div class="form-group">
                                <p class="small pull-right mb-0">{{ __('Description') }}</p>
                                <input type="text" name="description" placeholder="Description" class="form-control" value="{{ request('description') }}">
                            </div>
                            <div class="form-group">
                                <p class="small pull-right mb-0">{{ __('Teacher') }}</p>
                                <input type="text" name="teacher" placeholder="Teacher" class="form-control" value="{{ request('teacher') }}">
                            </div>
                            <div class="form-group text-right">
                                <a href="{{ route('lessons') }}">
                                    <i class="fa fa-undo"></i>
                                    {{ __('Cancels') }}
                                </a>
                                <input type="submit" value="{{ __('Search...') }}" class="btn btn-info text-white">
                            </div>
                        </form>
                    </div>
                </x-dd-div>
        </div>


    </div>


    <div class="row">
        @foreach ($lessons as $lesson)
            <x-lesson :lesson="$lesson" />
        @endforeach
    </div>


    {{ $lessons->links() }}

    @if ($new)<script> $(document).ready(function() { $('#bnew').click() }); </script> @endif
    @if ($asearch) <script> $(document).ready(function() { $('#basearch').click() }); </script> @endif

@endsection
