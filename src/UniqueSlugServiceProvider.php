<?php

namespace Arif\LaravelUniqueSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-unique-slug', function ($app) {
            return new \Arif\LaravelUniqueSlug\UniqueSlug();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/uniqueslug.php', 'uniqueslug'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/uniqueslug.php' => config_path('uniqueslug.php'),
        ]);
    }
}
