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
    | If you want this application to capture data usage and provide a higher
    | level of analytical view.
    |
    */

    'allow_registrations' => env('AMARANTH_REGISTRATION', false),
    'allow_invitations' => env('AMARANTH_BETA', true)

];