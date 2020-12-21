<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\Facades\View;
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
     * @return void
     */
    public function boot()
    {
        $path_array = request()->segments();
        $admin_route = config('app.admin_route');

        // If URL path is having "admin" then mark the current scope as Admin

        if (in_array($admin_route, $path_array)) {
            config(['app.app_scope' => 'admin']);
        }

        $app_scope = config('app.app_scope');

        // If App scope is admin then define View/Theme folder path

        if ($app_scope == 'admin') {
            $path = resource_path('back/views');
        } else {
            $path = resource_path('front/views');
        }

        view()->addLocation($path);

        view()->composer('*', function ($view) {
            $view->with('user', Auth::user() ? Auth::user()->load('roles') : null);
        });
    }
}
