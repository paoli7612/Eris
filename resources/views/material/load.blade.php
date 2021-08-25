@extends('layouts.app')

@section('title', 'Load')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        My lessons
                    </div>
                    <div class="card-body description">
                        <div class="row">
                            @foreach ($lessons as $lesson)
                                <x-lesson :lesson="$lesson" col="6" llink="?add" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
