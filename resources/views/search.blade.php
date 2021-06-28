@extends('layouts.app')

@section('content')
<div class="mx-auto col-4">
    <div class="m-3 p-3 bg-white shadow-sm">
        <form class="row" action="{{ route('search') }}" method="get">
            <div class="input-group col">
                <input type="text" class="form-control rounded-1" name="text" required>
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-outline-primary float-right" value="Search">
            </div>
        </form>
    </div>
</div>

<div class="row bg-white rounded shadow">

    @foreach ($users as $user)
        
        <div class="col-lg-3 col-md-4 col-sm-6 my-2 px-3">
            @include('partials.user')
        </div>

    @endforeach
</div>

@endsection
