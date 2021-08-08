@props(['link', 'icon', 'title'])

<a href="/{{ $link }}" class="btn btn-primary">
    <i class="{{ $icon }}"></i>
    {{ $title }}
</a>