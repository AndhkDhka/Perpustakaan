<?php

// Pastikan folder cache dialihkan ke /tmp karena Vercel bersifat Read-Only
$tmpDir = '/tmp/laravel/framework';
foreach (['/views', '/cache', '/sessions'] as $path) {
    if (!is_dir($tmpDir . $path)) {
        mkdir($tmpDir . $path, 0777, true);
    }
}

putenv("VIEW_COMPILED_PATH=$tmpDir/views");
putenv("APP_CONFIG_CACHE=$tmpDir/config.php");
putenv("APP_ROUTES_CACHE=$tmpDir/routes.php");

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);