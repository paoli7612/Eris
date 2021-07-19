@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <span class="float-right">
                    Nuova lezione
                </span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="card-body">

                <form action="/lezioni" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="title">Titolo</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Titolo">
                            </div>
                            <div class="col">
                                <label for="title">Utente</label>
                                <input type="text" class="form-control" placeholder="Titolo" disabled value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="float-right">
                            <a href="{{ route('home') }}" class="btn btn-secondary"> Annulla </a>
                            <input type="submit" class="btn btn-primary" value="Crea nuova lezione">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>


    </div>

@endsection
