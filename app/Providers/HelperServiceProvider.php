<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *protected $helpers = [
     *   Add your helpers in here
     *];
     * then
     * public function register()
        {
            foreach ($this->helpers as $helper) {
                $helper_path = app_path().'/Helpers/'.$helper.'.php';
                if (\File::isFile($helper_path)) {
                    require_once $helper_path;
                }
            }
        }
     * @return void
     */

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(app_path('Providers') . '/*.php') as $file) {
            require_once $file;
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
