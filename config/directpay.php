<?php

return [
    'merchant_id' => env('DIRECT_PAY_MERCHANT_ID', null),
    'api_key' => env('DIRECT_PAY_API_KEY', null),
    'prod_url' => env('DIRECT_PAY_PRODUCTION_URL', 'https://pay.directpay.lk/'),
    'dev_url' => env('DIRECT_PAY_DEVELOPMENT_URL', 'https://testpay.directpay.lk/'),
    'return_url' => env('DIRECT_PAY_RETURN_URL', config('app.url')),
    'cancel_url' => env('DIRECT_PAY_CANCEL_URL', config('app.url')),
    'response_url' => env('DIRECT_PAY_RESPONSE_URL', config('app.url')),
    'mode'  => env('DIRECT_PAY_MODE', 'local'),
];
