<?php

use GabrielFemi\Rootz\PrettyRoutesController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [PrettyRoutesController::class, 'greet']);

Route::get('routes', [PrettyRoutesController::class, 'show'])
    ->name('rootz.show')
    ->middleware(config('rootz.middlewares'));
