<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '1803525456603466',
    'client_secret' => '9973f38a90ccda26e0749ae17fb8432c',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
  ],
  'google' => [
    'client_id' => '424311407261-pdavve12glmb36djsr0k5rsuf476mo84.apps.googleusercontent.com',
    'client_secret' => 'R0K0t4TIVDy9Ih240VoIkVFu',
    'redirect' => 'http://localhost:8000/auth/google/callback',
],

];
