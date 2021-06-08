@extends ('layout.app')

@section('title', 'Home')

@section('content')
    <div class="pull-right">
        <form method="POST" action="#">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="DELETE">
        </form>
    </div>

    <h1>{{ $teacher->complete_name() }}</h1>
@endsection