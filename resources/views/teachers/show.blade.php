@extends ('layout.app')

@section('title', 'Home')

@section('content')
    <h1>{{ $teacher->complete_name() }}</h1>
@endsection