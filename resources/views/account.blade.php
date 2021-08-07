@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <br>
            <h1>{{ $user->complete_name }}</h1>
            <h3>{{ $user->type }}</h3>
        </div>
        <div class="col text-right">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('account') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input onchange="change_image(this)" type="file" name="image" class="d-none" id="image">
                        <button id="submit" type="submit" class="d-none btn btn-primary">
                            <i class="fa fa-save"></i>
                        </button>
                    </form>
                    <button id="input_button" onclick="$('#image').click()" class="text-center btn btn-secondary shadow">
                        <i class="fas fa-image"></i>
                        Change image </button>        
                </div>
                <div class="card-body text-center">
                    {!! $user->avatar(200) !!}<br>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        var change_image = function () {
            $('#input_button').text($('#image').first()[0].files[0].name);
            $('#input_button').addClass('btn-success');
            $('#submit').removeClass('d-none');
        }
    </script>

@endsection
