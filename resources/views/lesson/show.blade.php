@extends('layouts.app')

@section('title', $lesson->title)

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="/"> Home </x-layout.breadcrum-item>
            <x-layout.breadcrumb-item link="/lessons"> Lessons </x-layout.breadcrum-item>
                <x-layout.breadcrumb-item> {{ $lesson->title }} </x-layout.breadcrum-item>
    </ol>

    <div class="card shadow">
        <div class="card-header ">
            <h2 class="pull-left">
                {{ $lesson->title }}
            </h2>
            <a href="{{ route('course', $lesson->course) }}" class="pull-right">
                {{ $lesson->course->name }}
            </a>
        </div>

        <div class="card-body">
            <div id="tools">
                <a class="btn btn-light" href="{{ route('user', $lesson->user) }}">
                    <i class="fa fa-user"></i>
                    {{ $lesson->user->name }}
                </a>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>
            </div>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
        <div class="card-body">
            <button class="btn btn-light mb-3" disabled>
                <i class="fa fa-bookmark"></i>
                Salva
            </button>

            <a href="{{ route('lesson.details', $lesson) }}" class="btn btn-light  mb-3">
                <i class="fa fa-info-circle"></i>
                Dettagli</a>
            <button class="btn btn-light  mb-3" disabled>
                <i class="fa fa-edit"></i>
                Modifica</button>
            <a href="{{ route('lesson.settings', $lesson) }}" class="btn  mb-3">
                <i class="fa fa-cog"></i>
                Settings
            </a>
        </div>
    </div>

@endsection
