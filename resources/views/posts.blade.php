@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header"> Posts </div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            post body
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
