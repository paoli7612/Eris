@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb link="/"> Home </x-layout.breadcrumb>
        <li class="breadcrumb-item">
            Teachers
        </li>
    </ol>

    <div class="row">

        @foreach ($teachers as $teacher)

            <a href="{{ route('teacher', $teacher) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
                <div class="card bg-danger text-white">
                    <div class="card-header">
                        {{ $teacher->name }}
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </a>
        
        @endforeach
    </div>

@endsection
