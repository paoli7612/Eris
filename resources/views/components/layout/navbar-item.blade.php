<a href="{{ $link }}" class="btn {{ Request::is($active) ? "btn-$color" : "btn-outline-$color" }}">
    @if (isset($icon))
        <i class="{{ $icon }}"></i>
    @endif
    {{ $title }}
</a>
