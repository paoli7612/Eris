<a href="{{ $link }}" class="btn {{ Request::is($active) ? 'btn-primary' : 'bg-white' }}">
    @if (isset($icon))
        <i class="{{ $icon }}"></i>
    @endif
    {{ $title }}
</a>
