@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1>{{ $teacher->complete_name() }}</h1>

    <div class="float-right">
        @include('teacher.delete')
    </div>
    
@endsection