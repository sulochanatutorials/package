<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/v3/identity/health', function () {
    return response()->json([
        'data' => [
            'module' => 'identity',
            'status' => 'ok',
            'version' => '0.1.0',
        ],
    ]);
});
