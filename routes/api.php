<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\\Http\\Controllers\\API\\v1\\'], static function () {
    Route::get('/recommendations', 'ChannelController@index')->name('api.channels.index');
})/*->middleware('auth:sanctum')*/;
