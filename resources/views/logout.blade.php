@extends('layouts.app')

@section('title', 'Logout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Logout
                    </div>
                    <div class="card-body description">
                        Are you sure to disconnect {{ auth()->user()->name }}
                    </div>
                    <div class="card-footer small">
                        <form action="{{ route('logout') }}" method="POST">@csrf
                            <input type="submit" class="btn btn-danger" value="Logout">
                            <a href="{{ route('home') }}" class="btn btn-success">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
