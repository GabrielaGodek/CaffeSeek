@props(['tagsProp'])
@php
    $tags = explode(',', $tagsProp);
@endphp
@foreach ($tags as $tag)
    <div class="min-w-24 text-center rounded px-2 py-1 text-xs text-black bg-bg_second hover:bg-primary transition duration-100 hover:text-white">
        <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </div>
@endforeach
