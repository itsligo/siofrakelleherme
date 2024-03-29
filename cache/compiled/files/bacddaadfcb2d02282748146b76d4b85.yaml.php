<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simple_contact/simple_contact.yaml',
    'modified' => 1439227553,
    'data' => [
        'enabled' => true,
        'subject' => 'New contact from Grav site!',
        'recipient' => 'hello@example.com',
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Add your name'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Add your email'
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Add your message'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'submit' => [
                'label' => 'Submit'
            ]
        ],
        'messages' => [
            'success' => 'Thank You! Your message has been sent.',
            'error' => 'Oops! There was a problem with your submission. Please complete the form and try again.',
            'fail' => 'Oops! Something went wrong and we couldn\'t send your message.'
        ]
    ]
];
