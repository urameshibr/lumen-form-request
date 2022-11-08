<?php

namespace Urameshibr\Concerns;

use Laravel\Lumen\Application;

final class SessionSingleton
{
    public static function register(Application &$app): void
    {
        $app->singleton(\Illuminate\Session\SessionManager::class, function () use (&$app) {
            return $app->loadComponent(
                'session',
                \Illuminate\Session\SessionServiceProvider::class,
                'session'
            );
        });

        $app->singleton('session.store', function () use (&$app) {
            return $app->loadComponent(
                'session',
                \Illuminate\Session\SessionServiceProvider::class,
                'session.store'
            );
        });

        $app->middleware([
            \Illuminate\Session\Middleware\StartSession::class,
        ]);
    }
}
