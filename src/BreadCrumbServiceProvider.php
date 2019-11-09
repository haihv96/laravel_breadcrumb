<?php

namespace PhpMod\LaravelBreadCrumb;

use Illuminate\Support\ServiceProvider;

class BreadCrumbServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumb', function () {
            return new BreadcrumbList();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
