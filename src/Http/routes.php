<?php

use GabrielFemi\Rootz\PrettyRoutesController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [PrettyRoutesController::class, 'greet']);

Route::get(config('pretty-routes.url'), 'PrettyRoutes\PrettyRoutesController@show')
    ->name('pretty-routes.show')
    ->middleware(config('pretty-routes.middlewares'));
