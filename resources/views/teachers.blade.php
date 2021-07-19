@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Professori</h1>
</div>

    <div class="row m-3">
        @foreach ($teachers as $teacher)
            @include('partials.teacher-sm')
        @endforeach
    </div>

@endsection
