@extends('layouts.app')

@section('content')

    <script src="js/master.js"></script>

    @if ($saved)
        <x-tool link="teachers" icon="fas fa-users" title="All Teachers" />
    @else
        <x-tool link="my-teachers" icon="fas fa-users" title="Saved Teachers" />
    @endif

    <div class="row">
        @foreach ($teachers as $teacher)
            <div class="col-12 col-sm-6 my-3">
                <x-teacher :teacher=$teacher></x-teacher>
            </div>
        @endforeach
    </div>

@endsection
