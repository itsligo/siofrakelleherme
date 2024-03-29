<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/blueprints/config/site.yaml',
    'modified' => 1434301581,
    'data' => [
        'title' => 'Site',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'Defaults',
                    'fields' => [
                        'title' => [
                            'type' => 'text',
                            'label' => 'Site Title',
                            'size' => 'large',
                            'placeholder' => 'Site wide title',
                            'help' => 'Default title for your site'
                        ],
                        'author.name' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Default Author'
                        ],
                        'author.email' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Default Email',
                            'validate' => [
                                'type' => 'email'
                            ]
                        ],
                        'taxonomies' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Taxonomy Types',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'metadata' => [
                            'type' => 'array',
                            'label' => 'Metadata',
                            'placeholder_key' => 'Name',
                            'placeholder_value' => 'Content'
                        ]
                    ]
                ],
                'blog' => [
                    'type' => 'section',
                    'title' => 'Blog',
                    'fields' => [
                        'blog.route' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Blog URL'
                        ],
                        'summary.size' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'Summary Size',
                            'validate' => NULL,
                            'min' => 0,
                            'max' => 65536
                        ]
                    ]
                ],
                'routes' => [
                    'type' => 'section',
                    'title' => 'Routes',
                    'fields' => [
                        'routes' => [
                            'type' => 'array',
                            'label' => 'Custom',
                            'placeholder_key' => '/your/alias',
                            'placeholder_value' => '/your/route'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
