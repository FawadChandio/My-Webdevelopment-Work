<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | Configure your CORS settings here. You can adjust the paths, methods, and
    | origins that are allowed to access your application. The default values
    | should work for most cases.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];
