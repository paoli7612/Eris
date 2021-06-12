@extends ('layout.app')

@section('title', 'Professori')

@section('content')
    <h1>Teachers</h1>


    @include('teacher.new')

    <ul>

        @foreach ($teachers as $teacher)

            <li>
                <a href="{{ $teacher->route() }}">
                    {{ $teacher->complete_name() }}
                </a>
            </li>

        @endforeach

    </ul>
    
@endsection