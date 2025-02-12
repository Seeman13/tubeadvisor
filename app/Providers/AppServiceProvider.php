<?php

namespace App\Providers;

use DB, Log;

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
        // logging DB ...
        DB::listen(function ($query) {
            $location = collect(debug_backtrace())->filter(function ($trace) {
                return !str_contains($trace['file'], 'vendor');
            })->first();

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
