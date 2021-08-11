@extends('layouts.app')

@section('content')

    @foreach ($lessons as $lesson)
        <x-lesson.medium :lesson="$lesson" />
    @endforeach
    <div class="m-3">
        {{ $lessons->links('pagination.bootstrap-4') }}

    </div>

@endsection
