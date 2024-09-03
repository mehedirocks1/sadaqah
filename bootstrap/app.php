<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckRole; // Import the CheckRole middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register middleware aliases as an array
        $middleware->alias([
            'role' => CheckRole::class, // Correct registration of the CheckRole middleware alias
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
