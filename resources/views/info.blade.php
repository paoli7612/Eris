@extends('layouts.app')

@section('content')

<form action="/info" method="POST">
    @csrf

    <input type="email" name="email">

    <input type="submit" value="Test">

</form>

@if (session('message'))
    <p>{{session('message')}}</p>
@endif  

@endsection
