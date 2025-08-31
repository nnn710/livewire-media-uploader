<?php

return [

    'accept_from_config' => true,

    'collections' => [
        'avatars'     => 'images',
        'images'      => 'images',
        'attachments' => 'docs',
    ],

    'presets' => [
        'images' => [
            'types'   => env('MEDIA_TYPES_IMAGES',  'jpg,jpeg,png,webp,avif,gif'),
            'mimes'   => env('MEDIA_MIMES_IMAGES',  'image/jpeg,image/png,image/webp,image/avif,image/gif'),
            'max_kb'  => (int) env('MEDIA_MAXKB_IMAGES', 10240),
        ],

        'docs' => [
            'types'   => env('MEDIA_TYPES_DOCS',    'pdf,doc,docx,xls,xlsx,ppt,pptx,txt'),
            'mimes'   => env('MEDIA_MIMES_DOCS',    'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,text/plain'),
            'max_kb'  => (int) env('MEDIA_MAXKB_DOCS', 20480),
        ],

        'videos' => [
            'types'   => env('MEDIA_TYPES_VIDEOS',  'mp4,mov,webm'),
            'mimes'   => env('MEDIA_MIMES_VIDEOS',  'video/mp4,video/quicktime,video/webm'),
            'max_kb'  => (int) env('MEDIA_MAXKB_VIDEOS', 102400),
        ],

        'default' => [
            'types'   => env('MEDIA_TYPES_DEFAULT', 'jpg,jpeg,png,webp,avif,gif,pdf,doc,docx,xls,xlsx,ppt,pptx,txt'),
            'mimes'   => env('MEDIA_MIMES_DEFAULT', 'image/jpeg,image/png,image/webp,image/avif,image/gif,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,text/plain'),
            'max_kb'  => (int) env('MEDIA_MAXKB_DEFAULT', 10240),
        ],
    ],
];
