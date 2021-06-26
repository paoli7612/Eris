@extends('layouts.app')

@section('content')
    @include('_publish-post-panel')
    <div class="mt-3 border border-secondary border-3 rounded p-3">
        @foreach ($posts as $post)
            @include ('_post')                    
        @endforeach
    </div>
@endsection
