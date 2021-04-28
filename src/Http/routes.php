<?php

use GabrielFemi\Rootz\RootzController;
use Illuminate\Support\Facades\Route;

Route::get('routes', [RootzController::class, 'greet'])
    ->name('rootz.show')
    ->middleware(config('rootz.middlewares'));
