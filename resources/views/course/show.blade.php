@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="/courses">Courses</a>
      </li>
      <li class="breadcrumb-item">
        {{ $course->name }}
      </li>
    </ol>
    <div class="row">
      <div class="col">
        <div class="card bg-secondary">
            <h2 class="card-header text-white">
                {{ $course->name }}
            </h2>
            <div class="card-body">
                <button class="btn bg-white mb-3">
                    <i class="fa fa-bookmark"></i>
                  Salva</button>
              <button class="btn bg-white mb-3">
                <i class="fa fa-user"></i>
                Tommaso Paoli</button>
              <button class="btn bg-white mb-3">
                <i class="fa fa-info-circle"></i>
                Dettagli</button>
                <button class="btn bg-white mb-3">
                  <i class="fa fa-edit"></i>
                  Modifica</button>
                <button class="btn bg-white mb-3">
                  <i class="fa fa-book"></i>
                  Seleziona materie</button>
                <button class="btn bg-white mb-3">
                  <i class="fa fa-upload"></i>
                  Carica materiali</button>
                <button class="btn bg-white mb-3">
                  <i class="fa fa-trash"></i>
                  Elimina</button>
            </div>
          </div>
                </div>
    </div>
  
  </div>
@endsection
