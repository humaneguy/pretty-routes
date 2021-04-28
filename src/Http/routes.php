<?php

use GabrielFemi\Rootz\RootzController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [RootzController::class, 'greet']);


Route::post('wait', function () {
    return 'Posted';
});

Route::get('routes', [RootzController::class, 'show'])
    ->name('rootz.show')
    ->middleware(config('rootz.middlewares'));
