<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/pagination/blueprints.yaml',
    'modified' => 1434301755,
    'data' => [
        'name' => 'Pagination',
        'version' => '1.2.5',
        'description' => '**Pagination** is a very useful plugin to help navigate a large collection of pages, such as for a **blog**.',
        'icon' => 'list-ol',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-pagination',
        'keywords' => 'pagination, plugin, pages, navigation',
        'bugs' => 'https://github.com/getgrav/grav-plugin-pagination/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
