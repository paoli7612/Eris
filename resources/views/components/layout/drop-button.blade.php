<button class="btn btn-{{ $color ?? 'info' }} text-white shadow" type="button" data-toggle="collapse" data-target="#{{ $id }}"
    aria-expanded="false" aria-controls="collapseExample">
    @isset($icon)
        <i class="{{ $icon }}"></i>        
    @endisset
    {{ $title }}
</button>
