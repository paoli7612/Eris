<button class="btn btn-{{ $color ?? 'info' }} text-white shadow" type="button" data-toggle="collapse" data-target="#{{ $id }}"
    aria-expanded="false" aria-controls="{{ $id }}" @if (isset($iid)) id="{{ $iid }}" @endif>
    @isset($icon)
        <i class="{{ $icon }}"></i>        
    @endisset
    {{ $title }}
</button>
