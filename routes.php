<?php


use GabrielFemi\Rootz\PrettyRoutesController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [PrettyRoutesController::class, 'greet']);