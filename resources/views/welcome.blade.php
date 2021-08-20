@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Eris') }}</div>

                <div class="card-body">
                    Associo Roma a cose brutte, ma non posso andarmene
                    Ho demoni e il volto distrutto, e non so liberarmene
                    Se salgo sulla metro, lascio un posto vuoto anche per te
                    Magari torni e ci incontriamo, e tu ti siedi accanto a me
                    <hr>
                    <a class="pull-left" href="{{ route('login') }}">Sing in</a>
                    <a class="pull-right" href="{{ route('register') }}">Sing up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
