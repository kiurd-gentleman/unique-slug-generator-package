<?php

namespace Krimt\UniqueSlug;

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
        $this->app->bind('unique-slug' , function ($app){

            return new \Krimt\UniqueSlug\UniqueSlug();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/unique-slug.php', 'unique-slug'
        );

    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/unique-slug.php' => config_path('unique-slug.php'),
        ]);
    }
}
