<a href="{{ route($name) }}" class="btn {{ Request::is($name.'*') ? Colors::btn($name) : Colors::boutline($name) }}">
    @if (isset($icon))
        <i class="{{ $icon }}"></i>
    @endif
    {{ $name }}
</a>
