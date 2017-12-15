<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Engine Analytics
    |--------------------------------------------------------------------------
    |
    | If you want this application to capture data usage and provide a higher
    | level of analytical view.
    |
    */

    'analytics' => env('AMARANTH_ENABLE_ANALYTICS', true),


    /*
    |--------------------------------------------------------------------------
    | Authentication Settings
    |--------------------------------------------------------------------------
    |
    | Set up the userflow and access to your application.
    |
    */

    'allow_registrations' => env('AMARANTH_REGISTRATION', false),
    // Only applicable if registrations are not allowed
    'allow_beta' => env('AMARANTH_BETA', true)

];