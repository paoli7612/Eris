@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('_sidebar-links')
        </div>
        <div class="col">
            <div class="border border-primary rounded p-3">
               @include('_publish-tweet-panel')
            </div>

            <div class="mt-3 border border-secondary rounded p-3">
                @include ('_tweet')
                @include ('_tweet')
                @include ('_tweet')
                @include ('_tweet')
            </div>
        </div>
        <div class="col-3">
            @include('_friends-list')
        </div>
    </div>
@endsection
