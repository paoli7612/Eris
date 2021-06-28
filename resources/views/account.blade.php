@extends('layouts.app')

@section('content')
    <div class="container border border-3 rounded p-5 bg-white mt-3">
        <footer class="row p-3">
            <div class="col">
                <h1> {{ $user->name }} </h1>
                <h3 class="text-secondary">
                    {{ $user->email }}
                </h3>
                @if (auth()->user() != $user)
                    @if (auth()->user()->isFollowing($user))
                        <form action="{{ route('account', $user) }}" method="post">
                            @csrf
                            <button type="submit" href="follow" class="btn btn-success">
                                Smetti di seguire
                            </button>
                        </form>
                    @else
                        <form action="{{ route('account', $user) }}" method="post">
                            @csrf
                            <button type="submit" href="follow" class="btn btn-outline-success">
                                Segui
                            </button>
                        </form>    
                    @endif(auth()->user()->isFollowing($user))

                    
                @endif
            </div>
            <div class="col-auto">
                {!! $user->avatar_image(255) !!}
            </div>
        </footer>
    </div>


@endsection
