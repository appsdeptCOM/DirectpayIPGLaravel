<?php

return [

     /*
    |--------------------------------------------------------------------------
    | Merchant ID
    |--------------------------------------------------------------------------
    |
    | The directpay merchant ID that was generated for yor application
    |
    */
    'merchant_id' => env('DIRECT_PAY_MERCHANT_ID', null),

     /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | The directpay API Key that was generated for yor application
    |
    */
    'api_key' => env('DIRECT_PAY_API_KEY', null),

      /*
    |--------------------------------------------------------------------------
    | Production URL of Directpay
    |--------------------------------------------------------------------------
    | The URL that will be used to redirect to accept the real payment
    | No need to make any changes here unless you need to specifically overwrite the URL
    |
    */
    'prod_url' => env('DIRECT_PAY_PRODUCTION_URL', 'https://pay.directpay.lk/'),

       /*
    |--------------------------------------------------------------------------
    | Sandbox Developer URL of Directpay
    |--------------------------------------------------------------------------
    | The URL that will be used to redirect to accept the testing payment
    | No need to make any changes here unless you need to specifically overwrite the URL
    |
    */
    'dev_url' => env('DIRECT_PAY_DEVELOPMENT_URL', 'https://testpay.directpay.lk/'),

     /*
    |--------------------------------------------------------------------------
    | Return URL
    |--------------------------------------------------------------------------
    |
    | Return URL is the URL what will be used to redirect if the transaction was recognized
    | and back again to the application, please check the docs to see the parameters that will
    | be received with the redirection. You can validate the payment here, but it is recommended
    | to use the response URL.
    |
    */
    'return_url' => env('DIRECT_PAY_RETURN_URL', config('app.url')),

    /*
    |--------------------------------------------------------------------------
    | Cancel URL
    |--------------------------------------------------------------------------
    |
    | Cancel URL is the URL what will be used to redirect if the transaction was cancel by the user,
    | please check the docs to see the parameters that will be received with the redirection.
    |
    */
    'cancel_url' => env('DIRECT_PAY_CANCEL_URL', config('app.url')),

     /*
    |--------------------------------------------------------------------------
    | Response URL
    |--------------------------------------------------------------------------
    |
    | The directpay API will send a transaction response to this URL. This should be a POST route.
    | This will make sure the response is received even if the return URL has any errors.
    | Generate a API POST route as the response URL.
    |
    */
    'response_url' => env('DIRECT_PAY_RESPONSE_URL', config('app.url')),

     /*
    |--------------------------------------------------------------------------
    | Mode
    |--------------------------------------------------------------------------
    |
    | Mode will determine which API to use Sandbox or Live. Default is local which uses the Sandbox,
    | if you want to switch to live mode, use (prod) as mode.
    |
    */
    'mode'  => env('DIRECT_PAY_MODE', 'local'),
];
