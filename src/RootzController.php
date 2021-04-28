<?php
namespace GabrielFemi\Rootz;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Closure;
use Illuminate\Support\Facades\Route;

class RootzController {
    public function greet()
    {
        $middlewareClosure = function ($middleware) {
            return $middleware instanceof Closure ? 'Closure' : $middleware;
        };

        $routes = collect(Route::getRoutes());

        foreach (config('rootz.hide_matching') as $regex) {
            $routes = $routes->filter(function ($value, $key) use ($regex) {
                return !preg_match($regex, $value->uri());
            });
        }

        return view('rootz::welcome', [
            'routes' => $routes,
            'middlewareClosure' => $middlewareClosure,
        ]);
    }

    /**
     * Show pretty routes.
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        $middlewareClosure = function ($middleware) {
            return $middleware instanceof Closure ? 'Closure' : $middleware;
        };

        $routes = collect(Route::getRoutes());

        foreach (config('rootz.hide_matching') as $regex) {
            $routes = $routes->filter(function ($value, $key) use ($regex) {
                return !preg_match($regex, $value->uri());
            });
        }

        return view('rootz::routes', [
            'routes' => $routes,
            'middlewareClosure' => $middlewareClosure,
        ]);
    }

}
