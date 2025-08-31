<?php

namespace Codebyray\LivewireMediaUploader;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Codebyray\LivewireMediaUploader\Livewire\MediaUploader;

class MediaUploaderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/media-uploader.php', 'media-uploader');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'media-uploader');

        $this->publishes([
                             __DIR__ . '/../config/media-uploader.php' => config_path('media-uploader.php'),
                         ], 'media-uploader-config');

        $this->publishes([
                             __DIR__ . '/../resources/views' => resource_path('views/vendor/media-uploader'),
                         ], 'media-uploader-views');

        Livewire::component('media-uploader', MediaUploader::class);
        Livewire::component('media.media-uploader', MediaUploader::class);
    }
}
