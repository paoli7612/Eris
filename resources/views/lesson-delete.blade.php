@extends('layouts.app')

@section('content')
    <div class="container content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../home/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="../lezioni/">Lezioni</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('lezione', $lesson->id) }}">{{ $lesson->title }}</a>
            </li>
            <li class="breadcrumb-item">
                Elimina
            </li>
        </ol>

        <form action="{{ $lesson->route }}" method="post">
            @csrf
            @method('delete')

            <p> Sei sicuro di voler eliminare la lezione <b>{{ $lesson->title }}</b>? </p>

            <a href="." class="btn btn-secondary">
                Annnulla
            </a>

            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i>
                Elimina lezione
            </button>

        </form>

    </div>
@endsection
