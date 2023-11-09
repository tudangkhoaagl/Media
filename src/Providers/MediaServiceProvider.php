<?php

namespace Dangkhoa\Plugins\Media\src\Providers;

use Dangkhoa\PluginManager\Providers\BaseServiceProvider;

class MediaServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerRoute();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'media_plugin');

        $this->publishes([
            __DIR__ . '/../../database/migrations' => base_path('database/migrations/plugin_manager/media_plugin'),
        ], 'plugin_media_migration');

        parent::boot();
    }

    /**
     * Register route for plugin
     *
     * @return void
     */
    public function registerRoute(): void
    {
        if (class_exists(RouteServiceProvider::class)) {
            $this->app->register(RouteServiceProvider::class);
        }
    }
}
