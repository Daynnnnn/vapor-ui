<?php

use Laravel\VaporUi\Support\Cloud;

return [
    // Aws Credentials
    'key' => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'token' => env('AWS_SESSION_TOKEN'),
    'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),

    // Vapor Project / CloudWatch Log Group
    'project' => env('APP', ''),
    'project' => env('BRANCH', ''),
    'environment' => env('ENVIRONMENT', ''),

    // SQS Queue
    'queue' => [
        'prefix' => env('SQS_PREFIX'),
        'name' => env('SQS_QUEUE'),
    ],
];
