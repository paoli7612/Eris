@props(['lesson'])
<a href="{{ route('lesson', $lesson) }}" class="col-xl-4 col-md-6 col-sm-12 mb-3">
    <div class="card bg-success text-white">
        <div class="card-header">
            {{ $lesson->title }}
        </div>
        <div class="card-body">
            {{ $lesson->description }}
        </div>
    </div>
</a>