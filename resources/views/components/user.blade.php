@props(['user'])

<a href="{{ route('teacher', $user) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
    <div class="card bg-{{ config('app.colors.teachers') }} text-white">
        <div class="card-header">
            <img src="{{ $user->img }}" alt="avatar" width="32" class="rounded-circle pull-right">
            {{ $user->complete_name }}
        </div>
        <div class="card-body">
            {{ count($user->lessons) }}
        </div>
    </div>
</a>