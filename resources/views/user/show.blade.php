@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            Users
        </li>
        <li class="breadcrumb-item">
            {{ $user->name }}
        </li>
    </ol>
    <h1 class="pull-left"> {{ $user->name }} </h1>
    
    {!! auth()->user()->img(300, 'rounded-circle pull-right') !!}

@endsection
