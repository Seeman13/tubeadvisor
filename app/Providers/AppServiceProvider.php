<?php

namespace App\Providers;

use App, DB, Log;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!App::runningUnitTests()) {
            // logging DB ...
            DB::listen(function ($query) {
                $location = collect(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))
                    ->first(fn($trace) => isset($trace['file']) && !str_contains($trace['file'], 'vendor'));

                Log::info("
               ---------------------------------------------------------------------------------------------------------
               query: $query->sql
               time: $query->time
               file: {$location['file']}
               line: {$location['line']}
               ---------------------------------------------------------------------------------------------------------
            ");
            });
        }
    }
}
