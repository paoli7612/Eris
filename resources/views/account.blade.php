@extends('layouts.app')

@section('content')
    <x-user :user=$user />

    <script>
        var change_image = function () {
            $('#input_button').text($('#image').first()[0].files[0].name);
            $('#input_button').addClass('btn-success');
            $('#submit').removeClass('d-none');
        }
    </script>

@endsection
