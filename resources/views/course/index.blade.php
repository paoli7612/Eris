@extends ('layout.app')

@section('title', 'Corsi')

@section('content')
    <h1>Corsi</h1>


    @include('course.new')

    <ul>

        @foreach ($courses as $course)

            <li>
                <a href="{{ $course->route() }}">
                    {{ $course->title }}
                </a>
            </li>

        @endforeach

    </ul>
    
@endsection