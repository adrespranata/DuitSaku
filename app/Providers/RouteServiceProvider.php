<?php

namespace App\Providers;

use App\Models\MstRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadDynamicRoutes();
    }

    private function loadDynamicRoutes()
    {
        if (Schema::hasTable('mst_routes')) {
            $routes = MstRoute::all();

            foreach ($routes as $route) {
                Route::{$route->method}($route->uri, function () use ($route) {
                    return Inertia::render($route->component);
                })->middleware(explode(',', $route->middleware))->name($route->name);
            }
        }
    }
}
