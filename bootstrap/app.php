<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

use App\Http\Middleware\LoggingApiRequests;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        apiPrefix: 'api/v1',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(LoggingApiRequests::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (AccessDeniedHttpException $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatusCode());
        });

        $exceptions->renderable(function (AuthenticationException $e) {
            return response()->json(['message' => $e->getMessage()], 401);
        });

        $exceptions->renderable(function (MethodNotAllowedHttpException $e) {
            return response()->json(['message' => $e->getMessage()], $e->getStatusCode());
        });
    })->create();
