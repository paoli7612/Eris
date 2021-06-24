@extends('layouts.app')

@section('content')

    <form action="/" method="post">
        @csrf
        <div class="m-3">
            <input class="form-control col-4" name="email" type="text" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <input class="ml-3 btn btn-secondary" type="submit" value="email">

    </form>

@endsection

