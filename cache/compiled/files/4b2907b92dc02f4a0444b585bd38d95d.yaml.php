<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/cachebuster/blueprints.yaml',
    'modified' => 1434301748,
    'data' => [
        'name' => 'Cachebuster',
        'version' => '1.0.0',
        'description' => 'Bust your Grav cache',
        'icon' => 'trash',
        'author' => [
            'name' => 'Gertt',
            'email' => 'gert@gert.gert',
            'url' => 'http://github.com/Gertt'
        ],
        'homepage' => 'https://github.com/Gertt/grav-plugin-cachebuster',
        'keywords' => 'cache, clear, grav, cachebuster',
        'bugs' => 'https://github.com/Gertt/grav-plugin-cachebuster/issues',
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
                'route' => [
                    'type' => 'text',
                    'label' => 'Route',
                    'placeholder' => '/cachebuster'
                ]
            ]
        ]
    ]
];
