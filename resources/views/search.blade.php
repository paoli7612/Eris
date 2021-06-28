@extends('layouts.app')

@section('content')
<div class="container">
    <div class="m-3 p-3 bg-white shadow">
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
@endsection
