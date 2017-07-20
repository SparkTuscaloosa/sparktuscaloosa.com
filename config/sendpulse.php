<?php

return [
    'api_user_id' => env('SENDPULSE_API_USER_ID', null),
    'api_secret' => env('SENDPULSE_API_SECRET', null),

    /*
     *  Define where script will save access token
     * 
     *  Types: session, file
     */
    'token_storage' => env('TOKEN_STORAGE', 'file'),

    'storages' => [
        'file' => [
            'path' => '/app/'
        ]
    ]
];