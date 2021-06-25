@extends('layouts.app')

@section('content')
    <div class="d-flex">
        <div class="mx-4">
            @include('_sidebar-links')
        </div>
        <div class="p-2 flex-fill">2</div>
        <div class="mx-4">
            @include('_friends-list')
        </div>
    </div>
@endsection
