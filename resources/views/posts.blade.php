@extends('layouts.app')

@section('content')
    <div class="mt-3 border border-secondary border-3 rounded p-3">
        @foreach ($posts as $post)
            @include ('partials.post')                    
        @endforeach
    </div>
@endsection
