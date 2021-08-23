@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <x-layout.breadcrumb-item link="/"> Home </x-layout.breadcrumb-item>
        <li class="breadcrumb-item">
            Teachers
        </li>
    </ol>

    <div class="row">
        @foreach ($teachers as $teacher)
           <x-user :user="$teacher" />
        @endforeach
    </div>

    {{ $teachers->links() }}

@endsection
