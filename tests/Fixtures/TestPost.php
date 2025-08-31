<?php

namespace Codebyray\LivewireMediaUploader\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TestPost extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'posts';
    protected $guarded = [];
}
