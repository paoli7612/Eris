@extends('layouts.app')

@section('title', 'Delete Account')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Delete account
                    </div>
                    <div class="card-body description">
                        Are you sure to delete account: {{ auth()->user()->name }}
                    </div>
                    <div class="card-footer small">
                        <form action="{{ route('account.delete') }}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete account">
                            <a href="{{ route('home') }}" class="btn btn-success">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
