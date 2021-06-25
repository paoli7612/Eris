<div class="bg-light rounded p-3">
    <h3 class="font-weight-bold mb-4">Friends</h3>
    @foreach (\App\Models\User::all() as $user)
        @include('_friend')
    @endforeach
</div>