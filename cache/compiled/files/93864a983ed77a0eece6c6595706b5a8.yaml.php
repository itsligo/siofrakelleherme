<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/config/media.yaml',
    'modified' => 1434301583,
    'data' => [
        'defaults' => [
            'type' => 'file',
            'thumb' => 'media/thumb.png',
            'mime' => 'application/octet-stream',
            'image' => [
                'filters' => [
                    'default' => [
                        0 => 'enableProgressive'
                    ]
                ]
            ]
        ],
        'jpg' => [
            'type' => 'image',
            'thumb' => 'media/thumb-jpg.png',
            'mime' => 'image/jpeg'
        ],
        'jpeg' => [
            'type' => 'image',
            'thumb' => 'media/thumb-jpeg.png',
            'mime' => 'image/jpeg'
        ],
        'png' => [
            'type' => 'image',
            'thumb' => 'media/thumb-png.png',
            'mime' => 'image/png'
        ],
        'gif' => [
            'type' => 'animated',
            'thumb' => 'media/thumb-gif.png',
            'mime' => 'image/gif'
        ],
        'svg' => [
            'type' => 'vector',
            'thumb' => 'media/thumb-gif.png',
            'mime' => 'image/svg+xml'
        ],
        'mp4' => [
            'type' => 'video',
            'thumb' => 'media/thumb-mp4.png',
            'mime' => 'video/mp4'
        ],
        'mov' => [
            'type' => 'video',
            'thumb' => 'media/thumb-mov.png',
            'mime' => 'video/quicktime'
        ],
        'm4v' => [
            'type' => 'video',
            'thumb' => 'media/thumb-m4v.png',
            'mime' => 'video/x-m4v'
        ],
        'swf' => [
            'type' => 'video',
            'thumb' => 'media/thumb-swf.png',
            'mime' => 'video/x-flv'
        ],
        'flv' => [
            'type' => 'video',
            'thumb' => 'media/thumb-flv.png',
            'mime' => 'video/x-flv'
        ],
        'mp3' => [
            'type' => 'audio',
            'thumb' => 'media/thumb-mp3.png',
            'mime' => 'audio/mp3'
        ],
        'ogg' => [
            'type' => 'audio',
            'thumb' => 'media/thumb-ogg.png',
            'mime' => 'audio/ogg'
        ],
        'wma' => [
            'type' => 'audio',
            'thumb' => 'media/thumb-wma.png',
            'mime' => 'audio/wma'
        ],
        'm4a' => [
            'type' => 'audio',
            'thumb' => 'media/thumb-m4a.png',
            'mime' => 'audio/m4a'
        ],
        'wav' => [
            'type' => 'audio',
            'thumb' => 'media/thumb-wav.png',
            'mime' => 'audio/wav'
        ],
        'txt' => [
            'type' => 'file',
            'thumb' => 'media/thumb-txt.png',
            'mime' => 'text/plain'
        ],
        'doc' => [
            'type' => 'file',
            'thumb' => 'media/thumb-doc.png',
            'mime' => 'application/msword'
        ],
        'html' => [
            'type' => 'file',
            'thumb' => 'media/thumb-html.png',
            'mime' => 'text/html'
        ],
        'pdf' => [
            'type' => 'file',
            'thumb' => 'media/thumb-pdf.png',
            'mime' => 'application/pdf'
        ],
        'zip' => [
            'type' => 'file',
            'thumb' => 'media/thumb-zip.png',
            'mime' => 'application/zip'
        ],
        'gz' => [
            'type' => 'file',
            'thumb' => 'media/thumb-gz.png',
            'mime' => 'application/gzip'
        ]
    ]
];
