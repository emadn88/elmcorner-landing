<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'google' => [
        'analytics_id' => env('GOOGLE_ANALYTICS_ID', null),
        'tag_manager_id' => env('GOOGLE_TAG_MANAGER_ID', null),
        'ads_id' => env('GOOGLE_ADS_ID', null),
    ],

];
