@extends ('layout.app')

@section('title', 'Years')

@section('content')
    <h1>Years</h1>

    <ul>
        @foreach ($years as $year)
            <li>
                <a href="{{ $year->route() }}">
                    {{ $year->slug }}
                </a>
            </li>
        @endforeach
    </ul>
    
    @if (!App\Models\Year::first())
        <a href="years/init">
            <button class="btn btn-primary">init</button>        
        </a>
    @endif
@endsection