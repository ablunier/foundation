<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Route prefix
    |--------------------------------------------------------------------------
    |
    */
    'route_prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Site name
    |--------------------------------------------------------------------------
    |
    */
    'site_name' => 'Anavel',

    /*
    |--------------------------------------------------------------------------
    | Skin
    |--------------------------------------------------------------------------
    | skin-blue, skin-yellow, skin-purple, skin-green, skin-red, skin-black
    */
    'skin' => 'skin-black',

    /*
    |--------------------------------------------------------------------------
    | Skin
    |--------------------------------------------------------------------------
    | fixed, layout-boxed, sidebar-collapse
    */
    'layout_options' => '',

    /*
    |--------------------------------------------------------------------------
    | Authentication Driver
    |--------------------------------------------------------------------------
    | laravel, anavel (requires anavel/auth)
    */
    'auth_driver' => 'laravel',

    /*
    |--------------------------------------------------------------------------
    | Languages used for translated models
    |--------------------------------------------------------------------------
    |
    */
    'translation_languages' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Modules
    |--------------------------------------------------------------------------
    |
    */
    'modules' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard view
    |--------------------------------------------------------------------------
    |
    */
    'dashboard_view' => 'anavel::pages.index',
];
