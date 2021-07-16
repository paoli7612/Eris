
@extends('layouts.admin')

@section('content')

<div class="w3-panel w3-card-4 w3-display-middle w3-theme-l3 w3-half">
    <form class="w3-panel" action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email" class="w3-input w3-card-4 w3-round-large w3-margin-bottom">
        <input type="password" name="password" placeholder="Password" class="w3-input w3-card-4 w3-round-large w3-margin-bottom">
        <input class="w3-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="w3-text-grey" for="remember"> Rimani collegato </label>
        <input type="submit" class="w3-btn w3-white w3-card-4 w3-round-large w3-right" value="Accedi">
    </form>
</div>
    
@endsection