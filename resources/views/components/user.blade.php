@props(['user'])

    <a href="{{ route('teacher', $user) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
        <div class="card bg-danger text-white">
            <div class="card-header">
                <img src="{{ $user->img }}" alt="avatar" width="32" class="rounded-circle pull-right">
                {{ $user->name }}
            </div>
            <div class="card-body">
                {{ $user->type }}
            </div>
        </div>
    </a>