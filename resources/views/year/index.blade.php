@extends ('layout.app')

@section('title', 'Years')

@section('content')
    <h1>Years</h1>

    <ul>

        @foreach ($years as $year)

            <li>
                <a href="{{ $year->route() }}">
                    {{ $year->id }}
                </a>
            </li>

        @endforeach

    </ul>
    
@endsection