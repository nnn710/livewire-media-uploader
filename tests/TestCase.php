<?php

namespace Codebyray\LivewireMediaUploader\Tests;

use Codebyray\LivewireMediaUploader\MediaUploaderServiceProvider;
use Illuminate\Support\Facades\Storage;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\MediaLibrary\MediaLibraryServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            MediaLibraryServiceProvider::class,
            MediaUploaderServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        // App / DB
        $app['config']->set('app.key', 'base64:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=');
        $app['config']->set('app.url', 'http://localhost');

        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        // Queue sync so conversions (if any) don’t need a worker
        $app['config']->set('queue.default', 'sync');

        // Filesystems / Spatie disk
        $app['config']->set('filesystems.disks.public', [
            'driver'     => 'local',
            'root'       => storage_path('framework/testing/disks/public'),
            'url'        => '/storage',
            'visibility' => 'public',
        ]);
        $app['config']->set('media-library.disk_name', 'public');

        // Livewire temp upload disk
        $app['config']->set('livewire.temporary_file_upload.disk', 'local');

        // Extra tmp disk some helpers may touch
        $app['config']->set('filesystems.disks.tmp-for-tests', [
            'driver'     => 'local',
            'root'       => storage_path('framework/testing/disks/tmp-for-tests'),
            'visibility' => 'private',
        ]);

        // Package config (so tests don’t rely on publishing)
        $app['config']->set('media-uploader', require __DIR__ . '/config_stub/media-uploader.php');
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('local');
        Storage::fake('public');
        Storage::fake('tmp-for-tests');
    }
}
