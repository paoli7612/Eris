@extends('layouts.app')

@section('title', 'Teachers')

@section('content')

    <x-bc>
        <x-bc-item link="{{ route('home') }}">Home</x-bc-item>
        <x-bc-item>Teachers</x-bc-item>
    </x-bc>

    <div class="row">
        <form method="GET" class="mb-3 col-12 col-sm-6 mx-auto">
            <div class="input-group">
                <input placeholder="{{ __('search...') }}" name="search" type="search" class="form-control" value="{{ request('search') ?? '' }}" />
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="row">
        @foreach ($teachers as $teacher)
            <x-user :user="$teacher" />
        @endforeach
    </div>

    {{ $teachers->links() }}

@endsection
