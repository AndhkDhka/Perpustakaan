<?php
// api/index.php

use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

// Booting Laravel 11
$app = require_once __DIR__ . '/../bootstrap/app.php';

// PENTING: Alihkan storage ke /tmp karena Vercel Read-Only
$app->useStoragePath('/tmp/storage');

// Menjalankan request melalui handleRequest (Cara Laravel 11)
$app->handleRequest(Request::capture());