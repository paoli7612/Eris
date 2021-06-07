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

    <h1>{{ $course->title }}</h1>




@endsection