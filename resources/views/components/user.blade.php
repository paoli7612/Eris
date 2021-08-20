@props(['user'])

<div class="btn m-3">
    {{ $user->name }}
    <img src="{{ $user->img }}" alt="avatar">
</div>