<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Debugbar Settings
    |--------------------------------------------------------------------------
    |
    | Debugbar is enabled by default. When disabled, only requests to the
    | 'welcome' route will be tracked.
    |
    */
    'enabled' => env('DEBUG_BAR_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Debugbar Exclusions
    |--------------------------------------------------------------------------
    |
    | Requests to these routes will not be tracked by Debugbar.
    |
    */
    'except' => [
        'welcome',
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Storage
    |--------------------------------------------------------------------------
    |
    | Debugbar uses a storage mechanism to persist collected data.
    |
    */
    'storage' => [
        'enabled' => env('DEBUG_BAR_STORAGE_ENABLED', true),
        'driver' => env('DEBUG_BAR_STORAGE_DRIVER', 'file'), // 'file', 'redis', 'sqlite'
        'options' => [
            'file' => [
                'path' => storage_path('debugbar'),
            ],
            'redis' => [
                'connection' => 'default',
                'key' => 'debugbar',
            ],
            'sqlite' => [
                'connection' => 'sqlite',
                'database' => 'debugbar',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Headers
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via headers.
    |
    */
    'headers' => [
        'enabled' => env('DEBUG_BAR_HEADERS_ENABLED', false),
        'header' => 'X-Debugbar',
        'value' => 'true',
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Console
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via the browser console.
    |
    */
    'console' => [
        'enabled' => env('DEBUG_BAR_CONSOLE_ENABLED', false),
        'key' => 'debugbar',
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Autoload
    |--------------------------------------------------------------------------
    |
    | Debugbar can be autoloaded.
    |
    */
    'autoload' => env('DEBUG_BAR_AUTOLOAD', true),

    /*
    |--------------------------------------------------------------------------
    | Debugbar Route
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a route.
    |
    */
    'route' => [
        'enabled' => env('DEBUG_BAR_ROUTE_ENABLED', false),
        'uri' => 'debugbar',
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Toolbar
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via the toolbar.
    |
    */
    'toolbar' => [
        'enabled' => env('DEBUG_BAR_TOOLBAR_ENABLED', true),
        'position' => 'bottom', // 'top', 'bottom'
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Theme
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a theme.
    |
    */
    'theme' => [
        'enabled' => env('DEBUG_BAR_THEME_ENABLED', true),
        'dark' => env('DEBUG_BAR_THEME_DARK', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Data
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a data collector.
    |
    */
    'data' => [
        'enabled' => env('DEBUG_BAR_DATA_ENABLED', true),
        'collectors' => [
            'request' => env('DEBUG_BAR_DATA_REQUEST_ENABLED', true),
            'response' => env('DEBUG_BAR_DATA_RESPONSE_ENABLED', true),
            'memory' => env('DEBUG_BAR_DATA_MEMORY_ENABLED', true),
            'queries' => env('DEBUG_BAR_DATA_QUERIES_ENABLED', true),
            'views' => env('DEBUG_BAR_DATA_VIEWS_ENABLED', true),
            'files' => env('DEBUG_BAR_DATA_FILES_ENABLED', true),
            'config' => env('DEBUG_BAR_DATA_CONFIG_ENABLED', true),
            'session' => env('DEBUG_BAR_DATA_SESSION_ENABLED', true),
            'cookies' => env('DEBUG_BAR_DATA_COOKIES_ENABLED', true),
            'headers' => env('DEBUG_BAR_DATA_HEADERS_ENABLED', true),
            'route' => env('DEBUG_BAR_DATA_ROUTE_ENABLED', true),
            'auth' => env('DEBUG_BAR_DATA_AUTH_ENABLED', true),
            'errors' => env('DEBUG_BAR_DATA_ERRORS_ENABLED', true),
            'logs' => env('DEBUG_BAR_DATA_LOGS_ENABLED', true),
            'mail' => env('DEBUG_BAR_DATA_MAIL_ENABLED', true),
            'queue' => env('DEBUG_BAR_DATA_QUEUE_ENABLED', true),
            'cache' => env('DEBUG_BAR_DATA_CACHE_ENABLED', true),
            'redis' => env('DEBUG_BAR_DATA_REDIS_ENABLED', true),
            'database' => env('DEBUG_BAR_DATA_DATABASE_ENABLED', true),
            'filesystem' => env('DEBUG_BAR_DATA_FILESYSTEM_ENABLED', true),
            'events' => env('DEBUG_BAR_DATA_EVENTS_ENABLED', true),
            'commands' => env('DEBUG_BAR_DATA_COMMANDS_ENABLED', true),
            'schedule' => env('DEBUG_BAR_DATA_SCHEDULE_ENABLED', true),
            'api' => env('DEBUG_BAR_DATA_API_ENABLED', true),
            'debug' => env('DEBUG_BAR_DATA_DEBUG_ENABLED', true),
            'custom' => env('DEBUG_BAR_DATA_CUSTOM_ENABLED', true),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Collectors
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a collector.
    |
    */
    'collectors' => [
        'request' => env('DEBUG_BAR_COLLECTOR_REQUEST_ENABLED', true),
        'response' => env('DEBUG_BAR_COLLECTOR_RESPONSE_ENABLED', true),
        'memory' => env('DEBUG_BAR_COLLECTOR_MEMORY_ENABLED', true),
        'queries' => env('DEBUG_BAR_COLLECTOR_QUERIES_ENABLED', true),
        'views' => env('DEBUG_BAR_COLLECTOR_VIEWS_ENABLED', true),
        'files' => env('DEBUG_BAR_COLLECTOR_FILES_ENABLED', true),
        'config' => env('DEBUG_BAR_COLLECTOR_CONFIG_ENABLED', true),
        'session' => env('DEBUG_BAR_COLLECTOR_SESSION_ENABLED', true),
        'cookies' => env('DEBUG_BAR_COLLECTOR_COOKIES_ENABLED', true),
        'headers' => env('DEBUG_BAR_COLLECTOR_HEADERS_ENABLED', true),
        'route' => env('DEBUG_BAR_COLLECTOR_ROUTE_ENABLED', true),
        'auth' => env('DEBUG_BAR_COLLECTOR_AUTH_ENABLED', true),
        'errors' => env('DEBUG_BAR_COLLECTOR_ERRORS_ENABLED', true),
        'logs' => env('DEBUG_BAR_COLLECTOR_LOGS_ENABLED', true),
        'mail' => env('DEBUG_BAR_COLLECTOR_MAIL_ENABLED', true),
        'queue' => env('DEBUG_BAR_COLLECTOR_QUEUE_ENABLED', true),
        'cache' => env('DEBUG_BAR_COLLECTOR_CACHE_ENABLED', true),
        'redis' => env('DEBUG_BAR_COLLECTOR_REDIS_ENABLED', true),
        'database' => env('DEBUG_BAR_COLLECTOR_DATABASE_ENABLED', true),
        'filesystem' => env('DEBUG_BAR_COLLECTOR_FILESYSTEM_ENABLED', true),
        'events' => env('DEBUG_BAR_COLLECTOR_EVENTS_ENABLED', true),
        'commands' => env('DEBUG_BAR_COLLECTOR_COMMANDS_ENABLED', true),
        'schedule' => env('DEBUG_BAR_COLLECTOR_SCHEDULE_ENABLED', true),
        'api' => env('DEBUG_BAR_COLLECTOR_API_ENABLED', true),
        'debug' => env('DEBUG_BAR_COLLECTOR_DEBUG_ENABLED', true),
        'custom' => env('DEBUG_BAR_COLLECTOR_CUSTOM_ENABLED', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Toolbar
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a toolbar.
    |
    */
    'toolbar' => [
        'enabled' => env('DEBUG_BAR_TOOLBAR_ENABLED', true),
        'position' => 'bottom', // 'top', 'bottom'
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Theme
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a theme.
    |
    */
    'theme' => [
        'enabled' => env('DEBUG_BAR_THEME_ENABLED', true),
        'dark' => env('DEBUG_BAR_THEME_DARK', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Data
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a data collector.
    |
    */
    'data' => [
        'enabled' => env('DEBUG_BAR_DATA_ENABLED', true),
        'collectors' => [
            'request' => env('DEBUG_BAR_DATA_REQUEST_ENABLED', true),
            'response' => env('DEBUG_BAR_DATA_RESPONSE_ENABLED', true),
            'memory' => env('DEBUG_BAR_DATA_MEMORY_ENABLED', true),
            'queries' => env('DEBUG_BAR_DATA_QUERIES_ENABLED', true),
            'views' => env('DEBUG_BAR_DATA_VIEWS_ENABLED', true),
            'files' => env('DEBUG_BAR_DATA_FILES_ENABLED', true),
            'config' => env('DEBUG_BAR_DATA_CONFIG_ENABLED', true),
            'session' => env('DEBUG_BAR_DATA_SESSION_ENABLED', true),
            'cookies' => env('DEBUG_BAR_DATA_COOKIES_ENABLED', true),
            'headers' => env('DEBUG_BAR_DATA_HEADERS_ENABLED', true),
            'route' => env('DEBUG_BAR_DATA_ROUTE_ENABLED', true),
            'auth' => env('DEBUG_BAR_DATA_AUTH_ENABLED', true),
            'errors' => env('DEBUG_BAR_DATA_ERRORS_ENABLED', true),
            'logs' => env('DEBUG_BAR_DATA_LOGS_ENABLED', true),
            'mail' => env('DEBUG_BAR_DATA_MAIL_ENABLED', true),
            'queue' => env('DEBUG_BAR_DATA_QUEUE_ENABLED', true),
            'cache' => env('DEBUG_BAR_DATA_CACHE_ENABLED', true),
            'redis' => env('DEBUG_BAR_DATA_REDIS_ENABLED', true),
            'database' => env('DEBUG_BAR_DATA_DATABASE_ENABLED', true),
            'filesystem' => env('DEBUG_BAR_DATA_FILESYSTEM_ENABLED', true),
            'events' => env('DEBUG_BAR_DATA_EVENTS_ENABLED', true),
            'commands' => env('DEBUG_BAR_DATA_COMMANDS_ENABLED', true),
            'schedule' => env('DEBUG_BAR_DATA_SCHEDULE_ENABLED', true),
            'api' => env('DEBUG_BAR_DATA_API_ENABLED', true),
            'debug' => env('DEBUG_BAR_DATA_DEBUG_ENABLED', true),
            'custom' => env('DEBUG_BAR_DATA_CUSTOM_ENABLED', true),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debugbar Collectors
    |--------------------------------------------------------------------------
    |
    | Debugbar can be enabled via a collector.
    |
    */
    'collectors' => [
        'request' => env('DEBUG_BAR_COLLECTOR_REQUEST_ENABLED', true),
        'response' => env('DEBUG_BAR_COLLECTOR_RESPONSE_ENABLED', true),
        'memory' => env('DEBUG_BAR_COLLECTOR_MEMORY_ENABLED', true),
        'queries' => env('DEBUG_BAR_COLLECTOR_QUERIES_ENABLED', true),
        'views' => env('DEBUG_BAR_COLLECTOR_VIEWS_ENABLED', true),
        'files' => env('DEBUG_BAR_COLLECTOR_FILES_ENABLED', true),
        'config' => env('DEBUG_BAR_COLLECTOR_CONFIG_ENABLED', true),
        'session' => env('DEBUG_BAR_COLLECTOR_SESSION_ENABLED', true),
        'cookies' => env('DEBUG_BAR_COLLECTOR_COOKIES_ENABLED', true),
        'headers' => env('DEBUG_BAR_COLLECTOR_HEADERS_ENABLED', true),
        'route' => env('DEBUG_BAR_COLLECTOR_ROUTE_ENABLED', true),
        'auth' => env('DEBUG_BAR_COLLECTOR_AUTH_ENABLED', true),
        'errors' => env('DEBUG_BAR_COLLECTOR_ERRORS_ENABLED', true),
        'logs' => env('DEBUG_BAR_COLLECTOR_LOGS_ENABLED', true),
        'mail' => env('DEBUG_BAR_COLLECTOR_MAIL_ENABLED', true),
        'queue' => env('DEBUG_BAR_COLLECTOR_QUEUE_ENABLED', true),
        'cache' => env('DEBUG_BAR_COLLECTOR_CACHE_ENABLED', true),
        'redis' => env('DEBUG_BAR_COLLECTOR_REDIS_ENABLED', true),
        'database' => env('DEBUG_BAR_COLLECTOR_DATABASE_ENABLED', true),
        'filesystem' => env('DEBUG_BAR_COLLECTOR_FILESYSTEM_ENABLED', true),
        'events' => env('DEBUG_BAR_COLLECTOR_EVENTS_ENABLED', true),
        'commands' => env('DEBUG_BAR_COLLECTOR_COMMANDS_ENABLED', true),
        'schedule' => env('DEBUG_BAR_COLLECTOR_SCHEDULE_ENABLED', true),
        'api' => env('DEBUG_BAR_COLLECTOR_API_ENABLED', true),
        'debug' => env('DEBUG_BAR_COLLECTOR_DEBUG_ENABLED', true),
        'custom' => env('DEBUG_BAR_COLLECTOR_CUSTOM_ENABLED', true),
    ],
]; 