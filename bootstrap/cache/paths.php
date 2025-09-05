<?php
return [
    'storage' => env('VERCEL_PHP_STORAGE_PATH', '/tmp/storage'),
    'cache' => env('VERCEL_PHP_CACHE_PATH', '/tmp/bootstrap/cache'),
];
