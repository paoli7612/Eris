<li class="breadcrumb-item">
    @if (isset($link))
        <a href="{{ $link }}">{{ $slot }}</a>
    @else
        {{ $slot}}
    @endif
</li>