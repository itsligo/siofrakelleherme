<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/blueprints/config/system.yaml',
    'modified' => 1434301581,
    'data' => [
        'title' => 'System',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'Content',
                    'underline' => true,
                    'fields' => [
                        'home.alias' => [
                            'type' => 'pages',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Home Page',
                            'show_all' => false,
                            'show_modular' => false,
                            'show_root' => false,
                            'help' => 'The page that Grav will use as the default landing page'
                        ],
                        'pages.theme' => [
                            'type' => 'themeselect',
                            'classes' => 'fancy',
                            'size' => 'medium',
                            'label' => 'Default Theme',
                            'help' => 'Set the theme (defaults to \'default\')'
                        ],
                        'pages.markdown.extra' => [
                            'type' => 'toggle',
                            'label' => 'Markdown Extra',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.process' => [
                            'type' => 'checkboxes',
                            'label' => 'Process',
                            'default' => [
                                0 => [
                                    'markdown' => true
                                ],
                                1 => [
                                    'twig' => true
                                ]
                            ],
                            'options' => [
                                'markdown' => 'Markdown',
                                'twig' => 'Twig'
                            ],
                            'use' => 'keys'
                        ],
                        'pages.dateformat.short' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Short Date Format',
                            'help' => 'Set the short date format',
                            'default' => 'jS M Y',
                            'options' => [
                                'F jS \\\\a\\\\t g:ia' => 'January 1st at 11:59pm',
                                'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                                'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                                'd-m-y G:i' => '01-01-14 23:59',
                                'jS M Y' => '10th Feb 2014'
                            ]
                        ],
                        'pages.dateformat.long' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Long Date Format',
                            'help' => 'Set the long date format',
                            'options' => [
                                'F jS \\a\\t g:ia' => 'January 1st at 11:59pm',
                                'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                                'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                                'd-m-y G:i' => '01-01-14 23:59',
                                'jS M Y' => '10th Feb 2014'
                            ]
                        ],
                        'pages.order.by' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Default Ordering',
                            'options' => [
                                'default' => 'Default - based on folder name',
                                'folder' => 'Folder - based on prefix-less folder name',
                                'title' => 'Title - based on title field in header',
                                'date' => 'Date - based on date field in header'
                            ]
                        ],
                        'pages.order.dir' => [
                            'type' => 'toggle',
                            'label' => 'Default Order Direction',
                            'highlight' => 'asc',
                            'default' => 'desc',
                            'options' => [
                                'asc' => 'Ascending',
                                'desc' => 'Descending'
                            ]
                        ],
                        'pages.list.count' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'Default Item Count',
                            'help' => 'Default max pages count',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'pages.publish_dates' => [
                            'type' => 'toggle',
                            'label' => 'Date-based publishing',
                            'help' => 'Automatically (un)publish posts based on their date',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'events' => [
                    'type' => 'section',
                    'title' => 'Events',
                    'underline' => true,
                    'fields' => [
                        'pages.events.page' => [
                            'type' => 'toggle',
                            'label' => 'Page events',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.events.twig' => [
                            'type' => 'toggle',
                            'label' => 'Twig events',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'caching' => [
                    'type' => 'section',
                    'title' => 'Caching',
                    'underline' => true,
                    'fields' => [
                        'cache.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Caching',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cache.check.method' => [
                            'type' => 'select',
                            'size' => 'small',
                            'classes' => 'fancy',
                            'label' => 'Cache Check Method',
                            'options' => [
                                'file' => 'File',
                                'folder' => 'Folder',
                                'none' => 'None'
                            ]
                        ],
                        'cache.driver' => [
                            'type' => 'select',
                            'size' => 'small',
                            'classes' => 'fancy',
                            'label' => 'Cache driver',
                            'options' => [
                                'auto' => 'Auto detect',
                                'file' => 'File',
                                'apc' => 'APC',
                                'xcache' => 'XCache',
                                'memcache' => 'MemCache',
                                'wincache' => 'WinCache'
                            ]
                        ],
                        'cache.prefix' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'Cache Prefix',
                            'placeholder' => 'Derived from base URL (override by entering random string)'
                        ],
                        'cache.gzip' => [
                            'type' => 'toggle',
                            'label' => 'GZIP compression',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.enable_asset_timestamp' => [
                            'type' => 'toggle',
                            'label' => 'Enable timestamps on assets',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'media.enable_media_timestamp' => [
                            'type' => 'toggle',
                            'label' => 'Enable timestamps on media',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'twig' => [
                    'type' => 'section',
                    'title' => 'Twig Templating',
                    'underline' => true,
                    'fields' => [
                        'twig.cache' => [
                            'type' => 'toggle',
                            'label' => 'Twig caching',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.debug' => [
                            'type' => 'toggle',
                            'label' => 'Twig debug',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.auto_reload' => [
                            'type' => 'toggle',
                            'label' => 'Detect changes',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.autoescape' => [
                            'type' => 'toggle',
                            'label' => 'Autoescape variables',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'assets' => [
                    'type' => 'section',
                    'title' => 'Assets',
                    'underline' => true,
                    'fields' => [
                        'assets.css_pipeline' => [
                            'type' => 'toggle',
                            'label' => 'CSS Pipeline',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_minify' => [
                            'type' => 'toggle',
                            'label' => 'CSS Minify',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_minify_windows' => [
                            'type' => 'toggle',
                            'label' => 'CSS Minify Windows Override',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_rewrite' => [
                            'type' => 'toggle',
                            'label' => 'CSS Rewrite',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_pipeline' => [
                            'type' => 'toggle',
                            'label' => 'JavaScript Pipeline',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_minify' => [
                            'type' => 'toggle',
                            'label' => 'JavaScript Minify',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'errors' => [
                    'type' => 'section',
                    'title' => 'Error handler',
                    'underline' => true,
                    'fields' => [
                        'errors.display' => [
                            'type' => 'toggle',
                            'label' => 'Display errors',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'errors.log' => [
                            'type' => 'toggle',
                            'label' => 'Log errors',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'debugger' => [
                    'type' => 'section',
                    'title' => 'Debugger',
                    'underline' => true,
                    'fields' => [
                        'debugger.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Debugger',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'debugger.mode' => [
                            'type' => 'select',
                            'size' => 'small',
                            'classes' => 'fancy',
                            'label' => 'Mode',
                            'options' => [
                                'detect' => 'Auto-Detect',
                                'development' => 'Development',
                                'production' => 'Production'
                            ]
                        ],
                        'debugger.strict' => [
                            'type' => 'toggle',
                            'label' => 'Strict',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'debugger.max_depth' => [
                            'type' => 'select',
                            'size' => 'small',
                            'classes' => 'fancy',
                            'label' => 'Detail Level',
                            'placeholder' => 'How many nested levels to display for objects or arrays',
                            'options' => [
                                1 => '1 level',
                                2 => '2 levels',
                                3 => '3 levels',
                                4 => '4 levels',
                                5 => '5 levels',
                                6 => '6 levels',
                                7 => '7 levels',
                                8 => '8 levels',
                                9 => '9 levels',
                                10 => '10 levels'
                            ],
                            'validate' => [
                                'type' => 'number'
                            ]
                        ],
                        'debugger.log.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Logging',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'debugger.shutdown.close_connection' => [
                            'type' => 'toggle',
                            'label' => 'Shutdown Close Connection',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'media' => [
                    'type' => 'section',
                    'title' => 'Media',
                    'underline' => true,
                    'fields' => [
                        'images.default_image_quality' => [
                            'type' => 'text',
                            'label' => 'Default image quality',
                            'classes' => 'x-small',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1,
                                'max' => 100
                            ]
                        ],
                        'images.debug' => [
                            'type' => 'toggle',
                            'label' => 'Image debug watermark',
                            'highlight' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'media.upload_limit' => [
                            'type' => 'text',
                            'label' => 'File upload limit',
                            'classes' => 'small',
                            'validate' => [
                                'type' => 'number'
                            ]
                        ]
                    ]
                ],
                'system' => [
                    'type' => 'section',
                    'title' => 'System',
                    'underline' => true,
                    'fields' => [
                        'timezone' => [
                            'type' => 'select',
                            'label' => 'Timezone',
                            'classes' => 'fancy',
                            '@data-options' => '\\Grav\\Common\\Utils::timezones',
                            'default' => '',
                            'options' => [
                                '' => '- None -'
                            ]
                        ],
                        'param_sep' => [
                            'type' => 'select',
                            'label' => 'Parameter separator',
                            'classes' => 'fancy',
                            'default' => '',
                            'options' => [
                                ':' => ': (default)',
                                ';' => '; (use this for apache on Windows)'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
