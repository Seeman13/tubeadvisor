<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\\Http\\Controllers\\API\\v1\\'], static function () {
    Route::post('auth/register', 'AuthController@register')->name('api.auth.register');
    Route::post('auth/login', 'AuthController@login')->name('api.auth.login');

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('auth/logout', 'AuthController@logout')->name('api.auth.logout');

        Route::get('recommendations', 'ChannelController@index')->name('api.channels.index');
    });
});
