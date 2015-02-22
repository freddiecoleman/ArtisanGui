<?php namespace ArtisanGui;

use Illuminate\Support\ServiceProvider;

class ArtisanGuiServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__.'/views', 'ArtisanGui');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
