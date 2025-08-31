{{-- resources/views/vendor/media-uploader/livewire/media-uploader.blade.php --}}
@php
    $theme = $theme ?? config('media-uploader.theme', 'tailwind');
    $map   = (array) config('media-uploader.themes', []);
    $view  = $map[$theme] ?? $map['tailwind'] ?? 'media-uploader::themes.tailwind.media-uploader';
@endphp

@include($view)
