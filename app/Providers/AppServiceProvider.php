<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @param Request $request
     * @return void
     */
    public function boot(Request $request)
    {
        $path_array = $request->segments();
        $front_route = config('app.front_route');

        //If URL path is having "front" then mark the current scope as front-end
        if (in_array($front_route, $path_array)) {
            config(['app.app_scope' => 'front']);
        }


        $app_scope = config('app.app_scope');

        //if App scope is admin then define View/Theme folder path
        if ($app_scope == 'front') {
            $path = resource_path('front/views');
        } else {
            $path = resource_path('views');
        }

        view()->addLocation($path);
    }
}
