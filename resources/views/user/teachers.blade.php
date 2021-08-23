@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="/"> Home </x-layout.breadcrumb-item>
        <li class="breadcrumb-item">
            Teachers
        </li>
    </ol>

    <form method="GET" class="my-3">
        <div class="input-group">
            <div class="form-outline">
                <input name="search" type="search" class="form-control" value="{{ request('search') ?? '' }}" />
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>


    <div class="row">
        @foreach ($teachers as $teacher)
            <x-user :user="$teacher" />
        @endforeach
    </div>

    {{ $teachers->links() }}

@endsection
