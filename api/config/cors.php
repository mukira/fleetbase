<?php

use Fleetbase\Support\Utils;

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => array_filter(['https://test.lipagas.co', 'https://test.lipagas.co:4200', 'https://test.lipagas.co:8000', 'https://test.lipagas.co:38000', env('CONSOLE_HOST'), Utils::addWwwToUrl(env('CONSOLE_HOST'))]),

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => ['x-compressed-json', 'access-console-sandbox', 'access-console-sandbox-key'],

    'max_age' => 0,

    'supports_credentials' => true,

];
