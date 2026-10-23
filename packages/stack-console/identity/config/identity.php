<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Identity Package
    |--------------------------------------------------------------------------
    */

    'enabled' => env('SC_IDENTITY_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | API Prefix
    |--------------------------------------------------------------------------
    */

    'api_prefix' => 'api/v3/identity',

    /*
    |--------------------------------------------------------------------------
    | Authentication Provider
    |--------------------------------------------------------------------------
    |
    | This is a placeholder for future provider integration.
    | It does not configure or authenticate with ZITADEL yet.
    |
    */

    'provider' => [
        'default' => env('SC_IDENTITY_PROVIDER', null),
    ],
];
