<?php

return [
    'name' => 'derp_machine',
    'states' => [
        'new' => [
            'name' => 'new',
            'type' => 'initial',
            'events' => [
                'promote' => [
                    'name' => 'promote',
                    'transitions' => [
                        [
                            'outgoing_state_name' => 'ready',
                            'guard' => [
                                'class' => 'Workflux\Guard\ExpressionGuard',
                                'options' => [
                                    'expression' => 'not params.transcoding_required',
                                    'max_retries' => 3,
                                    'send_email' => false,
                                    'notify' => true,
                                    'email_template' => null
                                ]
                            ]
                        ]
                    ]
                ],
                '_sequential' => []
            ]
        ],
        'ready' => [
            'name' => 'ready',
            'type' => 'final',
            'events' => [
                '_sequential' => []
            ]
        ]
    ]
];